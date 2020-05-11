<?php
if ( ! defined('BASEPATH')) {
     exit('No direct script access allowed');
}
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
* @category  Helper
* @author    Mark Unwin <marku@opmantek.com>
* @copyright 2014 Opmantek
* @license   http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
* @version   GIT: Open-AudIT_3.3.2
* @link      http://www.open-audit.org
*/

if ( ! function_exists('response_create')) {
    /**
     * [response_create description]
     * @return [type] [description]
     */
    function response_create()
    {
        error_reporting(E_ALL);
        $instance = & get_instance();

        $log = new stdClass();
        $log->severity = 7;
        $log->type = 'system';
        $log->object = 'input_helper';
        $log->function = 'input_helper::create_response';
        $log->status = 'creating response object';
        $log->summary = '';

        // Define our constans for use in htmlspecialchars
        if ( ! defined('CHARSET')) {
            define('CHARSET', 'UTF-8');
            if (phpversion() >= 5.4) {
                define('REPLACE_FLAGS', ENT_COMPAT | ENT_XHTML);
            } else {
                define('REPLACE_FLAGS', ENT_COMPAT);
            }
        }

        // make sure we have the required header
        if (empty($_SERVER['HTTP_ACCEPT'])) {
            $_SERVER['HTTP_ACCEPT'] = '';
        }

        // enable the $_GET global
        parse_str(substr(strrchr($_SERVER['REQUEST_URI'], '?'), 1), $_GET);

        $response = new stdClass();
        $response->meta = new stdClass();
        $response->links = new stdClass();
        $response->included = array();
        $response->logs = array();

        $response->meta->access_token = @$instance->access_token;
        $response->meta->action = '';
        $response->meta->baseurl = '';
        if ( ! empty($instance->config->config['base_url'])) {
            $response->meta->baseurl = $instance->config->config['base_url'];
        }
        if ( ! empty($instance->config->config['id'])) {
            $response->meta->cloud_id = $instance->config->config['id'];
        }
        $response->meta->collection = '';
        $response->meta->debug = false;
        $response->meta->filtered = '';
        $response->meta->format = '';
        $response->meta->groupby = '';
        $response->meta->header = 'HTTP/1.1 200 OK';
        $response->meta->id = null;
        $response->meta->ids = null;
        $response->meta->include = '';
        $response->meta->limit = '';
        $response->meta->offset = 0;
        $response->meta->properties = '';
        // NOTE see response_get_filter for why we do the below with the query string
        $response->meta->query_string = urldecode($_SERVER['QUERY_STRING']);
        $response->meta->query_string = str_replace('&amp;', '&', $response->meta->query_string);
        $response->meta->request_method = strtoupper($instance->input->server('REQUEST_METHOD'));
        $response->meta->requestor = '';
        if ( ! empty($_SERVER['HTTP_REQUESTOR'])) {
            $response->meta->requestor = (string)$_SERVER['HTTP_REQUESTOR'];
        }
        $response->meta->sort = '';
        $response->meta->sub_resource = '';
        $response->meta->sub_resource_id = 0;
        if ( ! empty($GLOBALS['timer_start'])) {
            $response->meta->time_start = $GLOBALS['timer_start'];
        } else {
            $response->meta->time_start = microtime(true);
        }
        $response->meta->time_end = 0;
        $response->meta->time_elapsed = 0;
        $response->meta->total = 0;
        $response->meta->timestamp = $instance->config->config['timestamp'];
        $response->meta->timezone = $instance->config->config['timezone'];
        $response->meta->version = 1;
        $response->meta->filter = array();
        $response->meta->internal = new stdClass();
        $response->meta->query_parameters = array();
        $response->meta->received_data = array();
        $response->meta->sql = array();


        // Need to set vesrion FIRST because it may impact routes
        $response->meta->version = response_get_version();

        // no dependencies - set in GET or POST
        $response->meta->debug = response_get_debug();
        if ($response->meta->debug) {
            $instance->config->config['log_level'] = 7;
        }

        // no dependencies - set in GET or POST
        $response->meta->format = response_get_format();

        // depends on version affecting URI - set in URI or POST
        if ( ! empty($instance->uri->segment(1))) {
            $response->meta->collection = response_get_collection($instance->uri->segment(1));
        }
        $response->meta->heading = ucfirst($response->meta->collection);

        // depends on version affecting URI, collection, request_method, format
        if ($response->meta->collection === 'search' && $response->meta->request_method !== 'POST') {
            // Redirect as we only accept POSTs for /search
            log_error('ERR-0007', 'search:' . $response->response->meta->request_method);
            if ($instance->response->meta->format !== 'screen') {
                $response->errors = array();
                return($response);
            } else {
                $instance->session->set_flashdata('error', $response->errors[0]->detail);
                redirect('devices');
                exit();
            }
        }

        $instance->user->org_list = response_get_org_list($response->meta->collection, $instance->user);

        // depends on version affecting URI, collection - set in URI or POST
        $response->meta->id = null;
        if ( ! empty($instance->uri->segment(2))) {
            $response->meta->id = response_get_id($instance->uri->segment(2), $response->meta->collection, $instance->user->org_list);
        }

        // no dependencies - set in GET or POST
        $response->meta->ids = response_get_ids();

        // no dependencies - set in PATCH or POST, can set ID
        $response->meta->received_data = response_get_data($response->meta->request_method);
        if ( ! empty($response->meta->received_data->id)) {
            if ($response->meta->collection !== 'database' && $response->meta->collection !== 'configuration') {
                $response->meta->id = intval($response->meta->received_data->id);
            }
        }
        if ( ! empty($response->meta->received_data)) {
            if ($response->meta->request_method === 'POST' && ! empty($CI->config->config['access_token_enable']) && $CI->config->config['access_token_enable'] === 'y') {
                // MUST have an access token
                if (empty($CI->response->meta->received_data->access_token)) {
                    log_error('ERR-0034', $response->meta->collection . ':' . $response->meta->action);
                    $instance->session->set_flashdata('error', $response->errors[0]->detail);
                    if ($response->meta->format !== 'screen') {
                        output();
                        exit();
                    } else {
                        redirect($response->meta->collection);
                        exit();
                    }
                } else if ( ! in_array($response->meta->received_data->access_token, $instance->user->access_token)) {
                    log_error('ERR-0035', $response->meta->collection . ':' . $response->meta->action);
                    $instance->session->set_flashdata('error', $response->errors[0]->detail);
                    if ($response->meta->format !== 'screen') {
                        output();
                        exit();
                    } else {
                        redirect($response->meta->collection);
                        exit();
                    }
                }
            }
        }

        // depends on id, ids, recevied_data, request_method, sub_resource and sub_resource_id
        $response->meta->action = response_get_action($response);

        // depends on action
        if ($response->meta->action === 'create' OR $response->meta->action === 'import') {
            $response->meta->header = 'HTTP/1.1 201 Created';
        }

        // depends on collection and format
        $response->meta->include = response_get_include($response->meta->collection, $response->meta->format);

        // depends on version affecting URI, collection and format
        $response->meta->sub_resource = response_get_sub_resource($response->meta->collection, $response->meta->format);

        // depends on version affecting URI, sub_resource
        $response->meta->sub_resource_id = response_get_sub_resource_id($response->meta->sub_resource);

        // depends on version affecting URI, collection
        $response->meta->sort = response_get_sort($response->meta->collection);
        if ($response->meta->sort !== '') {
            $response->meta->internal->sort = 'ORDER BY ' . $response->meta->sort;
        } else {
            $response->meta->internal->sort = '';
        }

        // depends on version affecting URI, collection
        $response->meta->groupby = response_get_groupby($response->meta->collection);
        if ($response->meta->groupby) {
            $response->meta->internal->groupby = 'GROUP BY ' . $response->meta->groupby;
        } else {
            $response->meta->internal->groupby = '';
        }

        // no dependencies - set in GET or POST
        $response->meta->offset = response_get_offset();

        // depends on format - set in GET or POST
        $response->meta->limit = response_get_limit($response->meta->format);

        // depends on offset
        if ( ! empty($response->meta->limit)) {
            $response->meta->internal->limit = 'LIMIT ' . intval($response->meta->offset) . ',' . intval($response->meta->limit);
        } else {
            $response->meta->internal->limit = '';
        }

        // depends on collection
        $response->meta->properties = response_get_properties($response->meta->collection);

        // depends on properties, collection, sub_resource
        $response->meta->internal->properties = response_get_internal_properties($response->meta->properties, $response->meta->collection, $response->meta->sub_resource);

        // depends on query string
        $response->meta->filter = response_get_filter($response->meta->query_string);

        // depends on filter
        $response->meta->query_parameters = $response->meta->filter;

        $response->meta->internal->filter = response_get_internal_filter($response->meta->filter, $response->meta->collection);

        $response->meta->internal->join = response_get_internal_join($response->meta->filter, $response->meta->collection);

        $response->links = response_get_links($response->meta->collection, $response->meta->id, $response->meta->sub_resource, $response->meta->sub_resource_id);

        return $response;
    }
}



if ( ! function_exists('response_get_links')) {
    /**
     * Derive our links
     * @param  string $collection      [description]
     * @param  string $id              [description]
     * @param  string $sub_resource    [description]
     * @param  string $sub_resource_id [description]
     * @return class                   Our links
     */
    function response_get_links($collection = '', $id = '', $sub_resource = '', $sub_resource_id = '')
    {
        $log = new stdClass();
        $log->severity = 7;
        $log->type = 'system';
        $log->object = 'response_helper';
        $log->function = 'response_helper::response_get_filter';
        $log->status = 'parsing';
        $log->summary = 'get filter';

        $instance = & get_instance();
        $links = new stdClass();

        $links->self = $instance->config->config['base_url'] . 'index.php/' . $collection;
        if ( ! is_null($id)) {
            $links->self .= '/' . $id;
        }
        if ($sub_resource !== '') {
            $links->self .= '/' . $sub_resource;
        }
        if ( ! empty($sub_resource_id)) {
            $links->self .= '/' . $sub_resource_id;
        }
        $links->first = null;
        $links->last = null;
        $links->next = null;
        $links->prev = null;

        return $links;
    }
}

if ( ! function_exists('response_get_filter')) {
    /**
     * [response_get_filter description]
     * @param  [type] $query_string [description]
     * @return [type]               [description]
     */
    function response_get_filter($query_string)
    {
        $log = new stdClass();
        $log->severity = 7;
        $log->type = 'system';
        $log->object = 'response_helper';
        $log->function = 'response_helper::response_get_filter';
        $log->status = 'parsing';
        $log->summary = 'get filter';

        $reserved_words = valid_reserved_words();
        $filter = array();

        if (empty($query_string)) {
            return array();
        }

        if ( ! empty($query_string)) {
            foreach (explode('&', $query_string) as $item) {
                $query = new stdClass();
                $query->name = substr($item, 0, strpos($item, '='));
                $query->operator = '=';
                $query->value = str_replace($query->name.'=', '', $item);

                if (strtolower(substr($query->value, 0, 8)) === 'not like') {
                    $query->value = '%' . substr($query->value, 8) . '%';
                    $query->operator = 'not like';
                    $query->value = str_replace('"', '\"', $query->value);
                }

                if (strtolower(substr($query->value, 0, 5)) === '!like') {
                    $query->value = '%' . substr($query->value, 5) . '%';
                    $query->operator = 'not like';
                    $query->value = str_replace('"', '\"', $query->value);
                }

                $operator = substr($query->value, 0, 4);
                if (strtolower($operator) === 'like') {
                    $query->value = '%' . substr($query->value, 4) . '%';
                    $query->operator = $operator;
                    $query->value = str_replace('"', '\"', $query->value);
                }

                if (substr($query->value, 0, 3) === 'in(' && strpos($query->value, ')') === strlen($query->value)-1) {

                    // Removed the below. It is up to the user to quote enclose strings if required
                    // If we do this for them, they end up double quoted upon link generation in output_helper

                    // $temp_value = substr($query->value, 3, strlen($query->value)-4);
                    // $temp_value = str_replace("'", "\'", $temp_value);
                    // $temp_value = str_replace(",", "','", $temp_value);
                    // $query->value = "('" . $temp_value . "')";

                    $query->value = substr($query->value, 2);
                    $query->operator = 'in';
                    if (strpos($query->value, '"') !== false OR strpos($query->value, "'") !== false) {
                        $query->value = trim($query->value, '()');
                        $temp = explode(',', $query->value);
                        $query->value = '(';
                        foreach ($temp as $value) {
                            $value = trim($value);
                            $value = trim($value, '"\' ');
                            $value = str_replace('\"', '"', $value);
                            $value = str_replace('"', '\"', $value);
                            $query->value .= '"' . $value . '",';
                        }
                        $query->value = trim($query->value, ',');
                        $query->value .= ')';
                    }
                }

                if (substr($query->value, 0, 6) === 'notin(' && strpos($query->value, ')') === strlen($query->value)-1) {
                    $query->value = substr($query->value, 5);
                    $query->operator = 'not in';
                    if (strpos($query->value, '"') !== false OR strpos($query->value, "'") !== false) {
                        $query->value = trim($query->value, '()');
                        $temp = explode(',', $query->value);
                        $query->value = '(';
                        foreach ($temp as $value) {
                            $value = trim($value);
                            $value = trim($value, '"\' ');
                            $value = str_replace('\"', '"', $value);
                            $value = str_replace('"', '\"', $value);
                            $query->value .= '"' . $value . '",';
                        }
                        $query->value = trim($query->value, ',');
                        $query->value .= ')';
                    }
                }

                $operator = substr($query->value, 0, 2);
                if ($operator === '!=' OR $operator === '>=' OR $operator === '<=') {
                    $query->value = substr($query->value, 2);
                    $query->operator = $operator;
                    $query->value = str_replace('"', '\"', $query->value);
                }

                $operator = substr($query->value, 0, 1);
                if ($operator === '=' OR $operator === '>' OR $operator === '<') {
                    $query->value = substr($query->value, 1);
                    $query->operator = $operator;
                    $query->value = str_replace('"', '\"', $query->value);
                }

                // $query->name = str_replace(array(',', "'", '"', '(', ')'), '', $query->name);
                $query->name = preg_replace('/[^A-Za-z0-9\.\_]/', '', $query->name);

                if ($query->value === false) {
                    $query->value = '';
                }

                // Accept first_seen, last_seen, edited_date and timestamp as numeric unix_timestamp's and convert them to a local timestamp string
                $name = substr($query->name, strpos($query->name, '.')+1);
                if (($item === 'first_seen' OR $item === 'last_seen' OR $item === 'when' OR $item === 'edited_date' OR $item === 'timestamp') && is_numeric($value)) {
                    if ($query->operator === 'like' or $query->operator === 'not like') {
                        $query->value = str_replace('%', '', $query->value);
                    }
                    $query->value = from_unix_timestamp($query->value);
                    if ($query->operator === 'like' or $query->operator === 'not like') {
                        $query->value = '%' . $query->value . '%';
                    }
                }

                if (empty($query->operator)) {
                    $query->operator = '=';
                }

                if ( ! empty($query->name) && ! in_array($query->name, $reserved_words)) {
                    $filter[] = $query;
                }
            }
        }
        if ( ! empty($filter)) {
            $log->details = 'Filter: ' . json_encode($filter);
            stdlog($log);
        }
        return $filter;
    }
}

if ( ! function_exists('response_get_internal_filter')) {
    /**
     * [response_get_internal_filter description]
     * @param  [type] $filter     [description]
     * @param  [type] $collection [description]
     * @return [type]             [description]
     */
    function response_get_internal_filter($filter, $collection)
    {
        $log = new stdClass();
        $log->severity = 7;
        $log->type = 'system';
        $log->object = 'response_helper';
        $log->function = 'response_helper::response_get_internal_filter';
        $log->status = 'parsing';
        $log->summary = 'get filter';

        $instance = & get_instance();
        $reserved_words = valid_reserved_words();
        $internal_filter = '';

        if (empty($filter)) {
            return '';
        }
        foreach ($filter as $item) {
            if ( ! in_array($item->name, $reserved_words)) {
                // We MUST have a name like 'connections.name', not just 'name'
                if (strpos($item->name, '.') !== false) {
                    if ($item->operator === 'in') {
                        $internal_filter .= ' AND ' . $item->name . ' in ' . $item->value;
                    } else if ($item->operator === 'not in') {
                        $internal_filter .= ' AND ' . $item->name . ' not in ' . $item->value;
                    } else {
                        $internal_filter .= ' AND ' . $item->name . ' ' . $item->operator . ' ' . '"' . $item->value . '"';
                    }
                }
            }
        }
        if ($collection !== 'configuration' && $collection !== 'logs' ) {
            if ($internal_filter !== '') {
                $internal_filter = substr($filter, 5);
                $internal_filter = ' WHERE orgs.id IN (' . $instance->user->org_list . ') AND ' . $internal_filter;
            } else {
                $internal_filter = ' WHERE orgs.id IN (' . $instance->user->org_list . ')';
            }
        }
        if ($collection === 'configuration' OR $collection === 'logs' ) {
            if ($internal_filter !== '') {
                $internal_filter = ' WHERE ' . substr($internal_filter, 4);
            } else {
                $internal_filter = '';
            }
        }



        if ($filter !== '') {
            $log->details = 'Set internal filter: ' . htmlentities($filter);
            stdlog($log);
        }
        return $filter;
    }
}







if ( ! function_exists('response_get_internal_join')) {
    function response_get_internal_join($filter, $collection)
    {
        if ($collection === 'devices') {
            $join = '';
            $tables = '';
            if ( ! empty($filter) && is_array($filter) && count($filter) > 0) {
                foreach ($filter as $item) {
                    if (strpos($item->name, '.') !== false) {
                        $table = substr($item->name, 0, strpos($item->name, '.'));
                        if ($table !== 'system' && stripos($tables, ' ' . $table . ' ') === false) {
                            if ($table === 'change_log' OR $table === 'edit_log' OR $table === 'audit_log') {
                                $join .= ' LEFT JOIN `' . $table . '` ON (system.id = `' . $table . '`.system_id) ';
                            } else {
                                $join .= ' LEFT JOIN `' . $table . '` ON (system.id = `' . $table . '`.system_id AND ' . $table . '.current = "' . $CI->response->meta->current . '") ';
                            }
                        }
                        $tables .= " {$table} ";
                    }
                }
            }
        }
    }
}






if ( ! function_exists('response_get_action')) {
    /**
     * Determine the requested action
     * @param  object $response Our response object
     * @return string The action
     */
    function response_get_action($response)
    {
        $log = new stdClass();
        $log->severity = 7;
        $log->type = 'system';
        $log->object = 'response_helper';
        $log->function = 'response_helper::response_get_debug';
        $log->status = 'parsing';
        $log->summary = 'get action';

        $instance = & get_instance();
        $collection = $response->meta->collection;
        $id = $response->meta->id;
        $device_ids = $response->meta->ids;
        $received_data = $response->meta->received_data;
        $request_method = $response->meta->request_method;
        $sub_resource = $response->meta->sub_resource;
        $sub_resource_id = $response->meta->sub_resource_id;

        // The default
        $action = '';

        $valid_actions = response_valid_actions();
        if (in_array($instance->uri->segment(2), $valid_actions)) {
            $action = $instance->uri->segment(2);
        }
        if (empty($action) && in_array($instance->uri->segment(3), $valid_actions)) {
            $action = $instance->uri->segment(3);
        }
        if ($instance->input->get('action')) {
            $action = $instance->input->get('action');
            $log->detail = 'Set action to ' . htmlentities($action) . ', according to GET.';
            stdlog($log);
        }
        if ($instance->input->post('action')) {
            $action = $instance->input->post('action');
            $log->detail = 'Set action to ' . htmlentities($action) . ', according to POST.';
            stdlog($log);
        }
        if ($request_method === 'GET' && empty($id) && $action === '') {
            // return a list of items
            $action = 'collection';
            $log->detail = 'Set action to collection, because GET, no id, no action.';
            stdlog($log);
        }
        if ($request_method === 'GET' && empty($id) && $action === 'reset') {
            $action = 'reset';
            $log->detail = 'Set action to reset, because GET, action = reset.';
            stdlog($log);
        }
        if ($request_method === 'GET' && empty($id) && $action === 'export') {
            $action = 'export';
            $log->detail = 'Set action to export, because GET, action = reset.';
            stdlog($log);
        }
        if ($request_method === 'GET' && empty($id) && $action === 'create') {
            // show a HTML form for entering a new item
            $action = 'create_form';
            $log->detail = 'Set action to create_form, because GET, no id and action = create.';
            stdlog($log);
        }
        if ($request_method === 'GET' && $action === 'create' &&  ! empty($sub_resource) && empty($sub_resource_id)) {
            // show a HTML form for entering a new SubResource item
            $action = 'sub_resource_create_form';
            $log->detail = 'Set action to sub_resource_create_form, because GET, sub_resource, no sub_resource_id and action = create.';
            stdlog($log);
        }
        if ($request_method === 'GET' && $action === 'sub_resource_read' && ! empty($sub_resource)) {
            // return the sub_resource
            $action = 'sub_resource_read';
            $log->detail = 'Set action to sub_resource_read, because GET, sub_resource and action = sub_resource_read.';
            stdlog($log);
        }
        if ($request_method === 'GET' && $action === 'download' && $sub_resource !== '' && ! empty($sub_resource_id)) {
            // show a HTML form for entering a new item
            $action = 'sub_resource_download';
            $log->detail = 'Set action to sub_resource_download, because GET, sub_resource, sub_resource_id and action = download.';
            stdlog($log);
        }
        if ($request_method === 'GET' && $action === 'import' && empty($id)) {
            // show a HTML form for entering a new item
            $action = 'import_form';
            $log->detail = 'Set action to import_form, because GET, no id and action = import.';
            stdlog($log);
        }
        if ($request_method === 'GET' && $action === '' && ! empty($id)) {
            // return a single item
            $action = 'read';
            $log->detail = 'Set action to read, because GET, id and no action.';
            stdlog($log);
        }
        if ($request_method === 'GET' && $action === 'test' && ! empty($id)) {
            // test a single item
            $action = 'test';
            $log->detail = 'Set action to test, because GET, id and action = test.';
            stdlog($log);
        }
        // Special case for the database endpoint
        if ($action === 'update' && $collection === 'database') {
            $action = 'update';
            $log->detail = 'Set action to update, because collection = database and action = update.';
            stdlog($log);
        }
        if ($request_method === 'GET' && $action === 'execute' && $collection === 'database' && ! empty($sub_resource)) {
            // show a HTML form for updating an existing item
            $action = 'execute';
            $log->detail = 'Set action to execute, because GET, collection = database and action = execute';
            stdlog($log);
        }
        if ($request_method === 'GET' && $action === 'execute' && ! empty($id)) {
            // Execute the discovery / report / etc
            $action = 'execute';
            $log->detail = 'Set action to execute, because GET, id and action = execute';
            stdlog($log);
        }
        if ($request_method === 'GET' && $action === 'update' && empty($id) && ! empty($device_ids)) {
            // show a HTML form for entering a new item
            $action = 'bulk_update_form';
            $log->detail = 'Set action to bulk_update_form, because GET, ids, no id and action = update.';
            stdlog($log);
        }
        if ($request_method === 'GET' && $action === 'download' && ! empty($id) && empty($sub_resource)) {
            // mainly used for running a report and displaying the output
            $action = 'download';
            $log->detail = 'Set action to download, because GET, id and action = download.';
            stdlog($log);
        }
        if ($request_method === 'POST' && $action === '' && empty($id) &&  ! empty($received_data)) {
            // insert an item
            $action = 'create';
            $log->detail = 'Set action to create, because POST, data, no id and no action.';
            stdlog($log);
        }
        if ($request_method === 'POST' && $action === '' && empty($id) && empty($received_data)) {
            // default to collection as invalid request combo
            $action = 'collection';
            $log->detail = 'Set action to collection, because POST, no id, no data and no action.';
            stdlog($log);
        }
        if ($request_method === 'POST' && $action === 'import' && empty($id)) {
            // insert an item
            $action = 'import';
            $log->detail = 'Set action to import, because POST, no id and action = import.';
            stdlog($log);
        }
        if ($request_method === 'POST' && $action === 'update' && empty($id) && ! empty($device_ids)) {
            $action = 'update';
            $log->detail = 'Set action to update, because POST, ids, no id and action = update.';
            stdlog($log);
        }
        if ($request_method === 'POST' && $action === 'update' && empty($id) && $collection === 'database') {
            $action = 'update';
            $log->detail = 'Set action to update, because POST, no id, collection is database and action = update.';
            stdlog($log);
        }
        if (($request_method === 'PUT' OR $request_method === 'PATCH') && $action === '' && ! empty($id)) {
            // update an item
            $action = 'update';
            $log->detail = 'Set action to update, because POST/PATCH/PUT, id and no action.';
            stdlog($log);
        }
        if ($request_method === 'PATCH' && ! empty($device_ids)) {
            // update several items
            $action = 'update';
            $log->detail = 'Set action to update, because PATCH, ids and no id.';
            stdlog($log);
        }
        if ($request_method === 'POST' && ( ! empty($id) OR ! empty($device_ids)) && ! empty($sub_resource)) {
            // show a HTML form for entering a new item
            $action = 'sub_resource_create';
            $log->detail = 'Set action to sub_resource_create, because POST, id, sub_resource.';
            stdlog($log);
        }
        if ($request_method === 'DELETE' && ! empty($id) && empty($sub_resource)) {
            // delete an item
            $action = 'delete';
            $log->detail = 'Set action to delete, because DELETE, id.';
            stdlog($log);
        }
        if ($request_method === 'DELETE' && ! empty($id) && ! empty($sub_resource) && ! empty($sub_resource_id)) {
            // delete an item
            $action = 'sub_resource_delete';
            $log->detail = 'Set action to sub_resource_delete, because DELETE, id, sub_resource, sub_resource_id.';
            stdlog($log);
        }
        if ($action === '') {
            $action = 'collection';
            $log->detail = 'Set action to collection, no action.';
            stdlog($log);
        }
        if ( ! in_array($action, $valid_actions)) {
            $action = 'collection';
            $log->detail = 'Set action to collection, because not in allowed action list.';
            stdlog($log);
        }

        return $action;
    }
}

if ( ! function_exists('response_get_collection')) {
    /**
     * Determine and validate the requested collection
     * @param  string $collection The requested collection
     * @return string             The validated collection
     */
    function response_get_collection($collection = '')
    {
        $log = new stdClass();
        $log->severity = 7;
        $log->type = 'system';
        $log->object = 'response_helper';
        $log->function = 'response_helper::response_get_collection';
        $log->status = 'parsing';
        $log->summary = 'get data';

        $collections = response_valid_collections();
        if ( ! empty($collection)) {
            if (in_array($collection, $collections)) {
                $log->detail = 'Collection set to ' . htmlentities($collection);
            } else {
                $log->detail = 'Collection set to summaries as invalid collection supplied.';
                $collection = 'summaries';
            }
        } else {
            $log->detail = 'Collection set to summaries as no collection supplied.';
            $collection = 'summaries';
        }
        stdlog($log);
        return $collection;
    }
}

if ( ! function_exists('response_get_data')) {
    /**
     * Parse $_POST and $_PATCH for sent data
     * @param  string $request_method How we got this data
     * @return array The received data
     */
    function response_get_data($request_method = '')
    {
        $log = new stdClass();
        $log->severity = 7;
        $log->type = 'system';
        $log->object = 'response_helper';
        $log->function = 'response_helper::response_get_data';
        $log->status = 'parsing';
        $log->summary = 'get data';

        $data_supplied_by = '';
        $received_data = array();

        if ($request_method === 'POST') {
            if ( ! empty($_POST['data']) && is_array($_POST['data'])) {
                // This is form submitted data
                $received_data = $_POST['data'];
                $received_data = json_encode($received_data);
                $received_data = json_decode($received_data);
                $log->detail = 'Data has been supplied via POST HTML form.';
                $data_supplied_by = 'form';
            } else {
                // This is straight JSON submitted data in a string
                $received_data = @json_decode($_POST['data']);
                $log->detail = 'Data has been supplied via POST json.';
                $data_supplied_by = 'json';
            }
        }

        if ($request_method === 'PATCH') {
            $data_json = urldecode(str_replace('data=', '', file_get_contents('php://input')));
            $data_object = json_decode($data_json);
            $options = @$data_object->data->attributes->options;
            if (empty($data_object)) {
                $log->summary = 'Parsing patch request';
                $log->detail = 'Request method is PATCH but no data supplied.';
                $log->severity = 5;
            } else {
                $received_data = new stdClass();
                if ( ! empty($data_object->data)) {
                    $received_data = $data_object->data;
                } else {
                    $received_data = $data_object;
                }
                if ( ! empty($options)) {
                    $received_data->attributes->options = $options;
                }
            }
        }

        $log->detail = json_encode($received_data);
        stdlog($log);
        return $received_data;
    }
}

if ( ! function_exists('response_get_debug')) {
    /**
     * Determine if the request uses debug
     * @return bool
     */
    function response_get_debug()
    {
        $log = new stdClass();
        $log->severity = 7;
        $log->type = 'system';
        $log->object = 'response_helper';
        $log->function = 'response_helper::response_get_debug';
        $log->status = 'parsing';
        $log->summary = 'get debug';

        $instance = & get_instance();

        // The default
        $debug = false;

        if ($instance->input->get('debug')) {
            $debug = $instance->input->get('debug');
            $log->detail = 'Set debug to ' . htmlentities($debug) . ', according to URI.';
        }
        if ($instance->input->post('debug')) {
            $debug = $instance->input->post('debug');
            $log->detail = 'Set debug to ' . htmlentities($debug) . ', according to POST.';
            stdlog($log);
        }
        if (strtolower($debug) === 'true') {
            $debug = true;
            $instance->output->enable_profiler(true);
        } else {
            $debug = false;
            $instance->output->enable_profiler(false);
        }
        return $debug;
    }
}

if ( ! function_exists('response_get_format')) {
    /**
     * Return the response format derived from the HEADERS or URL (get) or BODY (post)
     * @return string The response format requested
     */
    function response_get_format()
    {
        $log = new stdClass();
        $log->severity = 7;
        $log->type = 'system';
        $log->object = 'response_helper';
        $log->function = 'response_helper::response_get_version';
        $log->status = 'parsing';
        $log->summary = 'get version';

        $instance = & get_instance();
        $format = 'json';

        if (strpos($_SERVER['HTTP_ACCEPT'], 'application/json') !== false) {
            $format = 'json';
            $log->detail = 'Set format to json, according to HEADERS.';
        }
        if (strpos($_SERVER['HTTP_ACCEPT'], 'html') !== false) {
            $format = 'screen';
            $log->detail = 'Set format to screen, according to HEADERS.';
        }
        if ( ! empty($_GET['format'])) {
            $format = $_GET['format'];
            $log->detail = 'Set format to ' . htmlentities($format) . ', according to GET.';
        }
        if ( ! empty($_POST['format'])) {
            $format = $_POST['format'];
            $log->detail = 'Set format to ' . htmlentities($format) . ', according to POST.';
        }
        if ($format === '') {
            $format = 'json';
            $log->detail = 'Set format to json, because default.';
        }
        $valid_formats = response_valid_formats();
        if ( ! in_array($format, $valid_formats)) {
            $log->detail = 'Set format to json, because unknown format (' . htmlentities($format) . ') provided.';
            $log->status = 'warning';
            $log->severity = 5;
            $format = 'json';
        }
        if (empty($log->detail)) {
            $log->status = 'fail';
            $log->detail = 'Could not set format';
            $log->severity = 4;
            $format = '';
        }
        stdlog($log);
#echo "<pre>$format\n"; print_r($log); exit;
        return $format;
    }
}

if ( ! function_exists('response_get_groupby')) {
    /**
     * Determine and validate the requested groupby
     * @param  string $collection The request collection
     * @return string             The validated groupby
     */
    function response_get_groupby($collection)
    {
        $log = new stdClass();
        $log->severity = 7;
        $log->type = 'system';
        $log->object = 'response_helper';
        $log->function = 'response_helper::response_get_groupby';
        $log->status = 'parsing';
        $log->summary = 'get action';

        $instance = & get_instance();
        $groupby = '';

        if ($instance->input->get('groupby')) {
            $groupby = $instance->input->get('groupby');
            $log->detail = 'Set groupby to ' . htmlentities($groupby) . ', according to GET.';
        }
        if ($instance->input->post('groupby')) {
            $groupby = $instance->input->post('groupby');
            $log->detail = 'Set groupby to ' . htmlentities($groupby). ', according to POST.';
        }
        if ( ! empty($groupby)) {
            if (strpos($groupby, '.') !== false) {
                $temp = explode('.', $groupby);
                if ( ! $instance->db->field_exists($temp[1], $temp[0])) {
                    $groupby = '';
                    $log->detail = 'Invalid groupby supplied, removed.';
                }
            } else {
                $temp = $instance->response->meta->collection;
                if ($temp === 'devices') {
                    $temp = 'system';
                }
                if ( ! $instance->db->field_exists($groupby, $temp)) {
                    $groupby = '';
                    $log->detail = 'Invalid groupby supplied, removed.';
                } else {
                    $groupby = $temp . '.' . $groupby;
                }
            }
        }
        if ( ! empty($groupby)) {
            stdlog($log);
        }
        return $groupby;
    }
}

if ( ! function_exists('response_get_id')) {
    /**
     * Determine if we are passed an ID or a name and return an integer ID
     * @param  string $id         [description]
     * @param  string $collection [description]
     * @param  string $org_list   [description]
     * @return int|null
     */
    function response_get_id($id = '', $collection = '', $org_list = '')
    {
        $log = new stdClass();
        $log->severity = 7;
        $log->type = 'system';
        $log->object = 'response_helper';
        $log->function = 'response_helper::response_get_id';
        $log->status = 'parsing';
        $log->summary = 'get id';

        $instance = & get_instance();

        if (empty($id)) {
            $log->detail = 'No ID provided, returning NULL.';
            stdlog($log);
            return null;
        }
        if (is_numeric($id)) {
            // we have a number, return that
            $log->detail = 'Number ID provided, returning integer.';
            stdlog($log);
            return intval($id);
        } else {
            $actions = response_valid_actions();
            $collections = response_valid_collections();
            $no_org_id = array('chart', 'configuration', 'database', 'errors', 'help', 'logs', 'nmis', 'reports', 'roles', 'search', 'sessions');
            if ( ! in_array($id, $actions)) {
                // Our 'id' is a string, but not an action - therefore it's a name
                $name = $id;
                if ($collection === 'database') {
                    $instance = & get_instance();
                    $tables = $instance->db->list_tables();
                    // add an entry for devices collection <-> system table
                    $tables[] = 'devices';
                    if ( ! in_array($id, $tables)) {
                        $id = null;
                    }
                } else if ($collection === 'devices') {
                    // devices -> system table
                    $sql = '/* response_helper::response_get_id */ ' . "SELECT id FROM system WHERE name LIKE ? AND org_id IN ({$org_list}) ORDER BY id DESC LIMIT 1";
                    $data = array($id);
                    $query = $instance->db->query($sql, $data);
                    $result = $query->result();
                    if ( ! empty($result)) {
                        $id = intval($result[0]->id);
                    }
                } else if ($collection === 'users') {
                    // Special case the username as we may be given user.name@domain.com for LDAP user, but we only use user.name in users.name
                    $sql = '/* response_helper::response_get_id */ ' . "SELECT id FROM users WHERE name LIKE ? AND org_id IN ({$org_list}) ORDER BY id DESC LIMIT 1";
                    $temp = explode('@', $id);
                    $data = array($temp[0]);
                    unset($temp);
                    $query = $instance->db->query($sql, $data);
                    $result = $query->result();
                    if ( ! empty($result)) {
                        $id = intval($result[0]->id);
                    }
                } else if ($collection === 'orgs') {
                    // orgs.id, not *.org_id
                    $sql = '/* response_helper::response_get_id */ ' . "SELECT id FROM orgs WHERE name LIKE ? AND id IN ({$org_list}) ORDER BY id DESC LIMIT 1";
                    $data = array($id);
                    $query = $instance->db->query($sql, $data);
                    $result = $query->result();
                    if ( ! empty($result)) {
                        $id = intval($result[0]->id);
                    }
                } else if ($collection === 'baselines_policies') {
                    // baselines_policies.baseline_id -> baselines.id -> baselines.org_id
                    $sql = '/* response_helper::response_get_id */ ' . "SELECT baselines_policies.id FROM baselines_policies LEFT JOIN baselines ON (baselines_policies.baseline_id = baselines.id) WHERE baselines_policies.name LIKE ? AND baselines.org_id IN ({$org_list}) ORDER BY id DESC LIMIT 1";
                    $data = array($id);
                    $query = $instance->db->query($sql, $data);
                    $result = $query->result();
                    if ( ! empty($result)) {
                        $id = intval($result[0]->id);
                    }
                } else if (in_array($collection, $no_org_id)) {
                    $id = 1;
                } else if (in_array($collection, $collections)) {
                    $sql = '/* response_helper::response_get_id */ ' . "SELECT id FROM {$collection} WHERE name LIKE ? AND org_id IN ({$org_list}) ORDER BY id DESC LIMIT 1";
                    $data = array($id);
                    $query = $instance->db->query($sql, $data);
                    $result = $query->result();
                    if ( ! empty($result)) {
                        $id = intval($result[0]->id);
                    }
                }
                if ( ! empty($id)) {
                    $log->detail = 'ID ' . $id . ' derived from name supplied (' . htmlentities($name) . ').';
                    stdlog($log);
                }
                return $id;
            }
        }
    }
}

if ( ! function_exists('response_get_ids')) {
    /**
     * Determine the list of device IDs
     * @return string The comma separated list of device IDs
     */
    function response_get_ids()
    {
        $log = new stdClass();
        $log->severity = 7;
        $log->type = 'system';
        $log->object = 'response_helper';
        $log->function = 'response_helper::response_get_ids';
        $log->status = 'parsing';
        $log->summary = 'get ids';

        $instance = & get_instance();
        $device_ids = '';

        if ( ! empty($instance->input->get('ids'))) {
            $device_ids = $instance->input->get('ids');
            // Remove a trailing comma if we have one
            if (substr($device_ids, -1) === ',') {
                $device_ids = substr($device_ids, 0, -1);
            }
            // Set all values to int's
            $temp = explode(',', $device_ids);
            for ($i=0; $i < count($temp); $i++) {
                $temp[$i] = intval($temp[$i]);
            }
            // Join by comma's
            $device_ids = implode(',', $temp);
            unset($temp);
            $log->detail = 'Device IDs set to: ' . $device_ids;
        }
        if ($device_ids !== '') {
            stdlog($log);
        }
        return $device_ids;
    }
}

if ( ! function_exists('response_get_include')) {
    /**
     * Determine the requested included sub-collections
     * @param  string $collection [description]
     * @param  string $format     [description]
     * @return string The requested includes, or all valid includes, or none
     */
    function response_get_include($collection = '', $format = '')
    {
        $log = new stdClass();
        $log->severity = 7;
        $log->type = 'system';
        $log->object = 'response_helper';
        $log->function = 'response_helper::response_get_id';
        $log->status = 'parsing';
        $log->summary = 'get include';

        $instance = & get_instance();
        $include = '';

        // We only use include for devices.
        if ($collection !== 'devices') {
            return $include;
        }

        if ($instance->input->get('include')) {
            $include = $instance->input->get('include');
            $log->detail = 'Set include according to GET. ';
        }
        if ($instance->input->post('include')) {
            $include = $instance->input->post('include');
            $log->detail = 'Set include according to POST. ';
        }
        if ( ! empty($include)) {
            $valid_includes = response_valid_includes();
            if ($format === 'screen' && (empty($include) OR $include === '*' OR $include === 'all')) {
                $include = implode(',', $valid_includes);
            } else {
                $temp = explode(',', $include);
                for ($i=0; $i < count($temp); $i++) {
                    if ( ! in_array($temp[$i], $valid_includes)) {
                        unset($temp[$i]);
                    }
                }
                $include = implode(',', $temp);
            }
        }
        if ($include !== '') {
            $log->detail .= htmlentities($include);
            stdlog($log);
        }
        return $include;
    }
}

if ( ! function_exists('response_get_internal_properties')) {
    /**
     * [response_get_internal_properties description]
     * @param  string $properties   [description]
     * @param  string $ollection    [description]
     * @param  string $sub_resource [description]
     * @return [type]               [description]
     */
    function response_get_internal_properties($properties = '', $collection = '', $sub_resource = '')
    {
        $log = new stdClass();
        $log->severity = 7;
        $log->type = 'system';
        $log->object = 'response_helper';
        $log->function = 'response_helper::response_get_internal_properties';
        $log->status = 'parsing';
        $log->summary = 'get internal_properties';

        $instance = & get_instance();
        $internal_properties = '';

        // create our internal properties list - this is what gets executed in SQL
        if ($properties !== '*' && $properties !== $sub_resource . '.*') {
            $temp = explode(',', $properties);
            foreach ($temp as $property) {
                if ($property === 'count') {
                    $internal_properties .= 'count(*) as `count`,';
                } elseif ($property === 'system_id') {
                    $internal_properties .= 'system.id as `system_id`,';
                } else {
                    $internal_properties .= $property . ' AS `' . trim($property) . '`,';
                }
            }
            $internal_properties = substr($internal_properties, 0, -1);
        } else {
            $internal_properties = $properties;
        }
        if ($properties === '*') {
            $temp = $collection;
            if ($temp === 'devices') {
                $temp = 'system';
            }

            // Uncomment the below to enable fully qualified column names.
            // NOTE - this would break the current HTML templates and change the API response.
            // Maybe enable for v4 (if ever)
            // $fields = $instance->db->list_fields($temp);
            // for ($i=0; $i < count($fields); $i++) {
            //     $fields[$i] = $temp . '.' . $fields[$i] . ' AS `' . $temp . '.' . $fields[$i] . '`';
            // }
            // $internal_properties = implode(', ', $fields);

            $internal_properties = '`' . $temp . '`.*';
        }
        if ( ! empty($internal_properties)) {
            $log->details = 'Set internal properties to: ' . htmlentities($internal_properties);
            stdlog($log);
        }
        return $internal_properties;
    }
}

if ( ! function_exists('response_get_limit')) {
    /**
     * [response_get_limit description]
     * @param  string $format [description]
     * @return [type]         [description]
     */
    function response_get_limit($format = '')
    {
        $log = new stdClass();
        $log->severity = 7;
        $log->type = 'system';
        $log->object = 'response_helper';
        $log->function = 'response_helper::response_get_groupby';
        $log->status = 'parsing';
        $log->summary = 'get action';

        $instance = & get_instance();
        $limit = 0;

        if ($instance->input->get('limit')) {
            $limit = intval($instance->input->get('limit'));
            $log->detail = 'Set limit to ' . $limit . ', according to GET.';
            stdlog($log);
        }
        if ($instance->input->post('limit')) {
            $limit = intval($instance->input->post('limit'));
            $log->detail = 'Set limit to ' . $limit . ', according to POST.';
            stdlog($log);
        }
        if ($format === 'screen' && empty($limit)) {
            $limit = intval($instance->config->config['page_size']);
            $log->detail = 'Set limit to ' . $limit . ', because screen format and no limit requested, so default (page_size).';
            stdlog($log);
        }
        if ($format === 'json' && empty($limit)) {
            $limit = intval($instance->config->config['database_show_row_limit']);
            $log->detail = 'Set limit to ' . $limit . ', because JSON format and no limit requested, so default (database_show_row_limit).';
            stdlog($log);
        }
        if ( ! empty($limit)) {
            stdlog($log);
        }
        return $limit;
    }
}

if ( ! function_exists('response_get_offset')) {
    /**
     * Determine the requested offset
     * @return [type] [description]
     */
    function response_get_offset()
    {
        $log = new stdClass();
        $log->severity = 7;
        $log->type = 'system';
        $log->object = 'response_helper';
        $log->function = 'response_helper::response_get_groupby';
        $log->status = 'parsing';
        $log->summary = 'get action';

        $instance = & get_instance();
        $offset = 0;

        if ($instance->input->get('offset')) {
            $offset = intval($instance->input->get('offset'));
            $log->detail = 'Set offset to ' . $offset . ', according to GET.';
            stdlog($log);
        }
        if ($instance->input->post('offset')) {
            $offset = intval($instance->input->post('offset'));
            $log->detail = 'Set offset to ' . $offset . ', according to POST.';
            stdlog($log);
        }
        if ( ! empty($offset)) {
            stdlog($log);
        }
        return $offset;
    }
}

if ( ! function_exists('response_get_org_list')) {
    /**
     * Return the Org IDs list for the given collection for a supplied user
     * @param  string $collection [description]
     * @param  [type] $user       [description]
     * @return [type]             [description]
     */
    function response_get_org_list($collection = '', $user = null)
    {
        $log = new stdClass();
        $log->severity = 7;
        $log->type = 'system';
        $log->object = 'response_helper';
        $log->function = 'response_helper::response_get_org_list';
        $log->status = 'parsing';
        $log->summary = 'get org list';

        if ($collection === '' OR $user === null) {
            $log->severity = 5;
            $log->details = 'Either no collection or no user supplied.';
            stdlog($log);
            return;
        }

        $instance = & get_instance();

        $org_list = array();
        switch ($collection) {
            case 'agents':
            case 'applications':
            case 'baselines':
            case 'baselines_policies':
            case 'buildings':
            case 'clouds':
            case 'clusters':
            case 'collectors':
            case 'connections':
            case 'credentials':
            case 'devices':
            case 'discoveries':
            case 'discovery_log':
            case 'floors':
            case 'integrations':
            case 'ldap_servers':
            case 'licenses':
            case 'locations':
            case 'logs':
            case 'networks':
            case 'orgs':
            case 'rack_devices':
            case 'racks':
            case 'rooms':
            case 'rows':
            case 'tasks':
            case 'users':
                $org_list = array_unique(array_merge($user->orgs, $instance->m_orgs->get_user_descendants($user->id)));
                break;

            case 'configuration':
            case 'database':
            case 'errors':
            case 'help':
            case 'nmis':
            case 'san':
            case 'search':
            case 'test':
            case 'util':
                $org_list = $user->orgs;
                break;

            case 'dashboards':
            case 'discovery_scan_options':
            case 'fields':
            case 'files':
            case 'groups':
            case 'queries':
            case 'reports':
            case 'roles':
            case 'rules':
            case 'scripts':
            case 'summaries':
            case 'widgets':
                $org_list = array_unique(array_merge($user->orgs, $instance->m_orgs->get_user_descendants($user->id)));
                $org_list = array_unique(array_merge($org_list, $instance->m_orgs->get_user_ascendants($user->id)));
                $org_list[] = 1;
                break;

            default:
                $org_list = $user->orgs;
                break;
        }
        $user->org_list = implode(',', $org_list);

        $log->detail = 'OrgList for ' . $collection . ' set to: ' . json_encode($org_list);
        stdlog($log);
        return $org_list;
    }
}

if ( ! function_exists('response_get_properties')) {
    /**
     * Determine and validate or supply default property list
     * @param  string $collection   The request collection
     * @param  string $action       The request action
     * @param  string $sub_resource The request sub_resource (if exists)
     * @return string               A comma separeted list of properties
     */
    function response_get_properties($collection = '', $action = '', $sub_resource = '')
    {
        $log = new stdClass();
        $log->severity = 7;
        $log->type = 'system';
        $log->object = 'response_helper';
        $log->function = 'response_helper::response_get_groupby';
        $log->status = 'parsing';
        $log->summary = 'get action';

        $instance = & get_instance();
        $properties = '';

        // different DB table
        if ($sub_resource === 'devices') {
            $sub_resource = 'system';
        }

        $table = $collection;
        if ($table === 'devices') {
            $table = 'system';
        }

        if ( ! empty($_GET['properties'])) {
            $properties = $_GET['properties'];
            $log->detail = 'Set properties to ' . str_replace('"', '', $properties) . ', according to GET.';
            stdlog($log);
        }
        if ( ! empty($_POST['properties'])) {
            $properties = $_POST['properties'];
            $log->detail = 'Set properties to ' . str_replace('"', '', $properties) . ', according to POST.';
            stdlog($log);
        }
        // Allow for format of properties=["id", "name", "status"]
        if ($temp = json_decode($properties)) {
            $properties = implode(',', $temp);
            $log->detail = 'Set properties to ' . str_replace('"', '', $properties) . ', secondary format.';
            stdlog($log);
        }

        if ($collection === 'devices') {
            if ($action === 'collection' && ($properties === 'default' OR $properties === '') && ($sub_resource === '' OR $sub_resource === 'system')) {
                if ($properties === 'default') {
                    $properties = $instance->config->config['devices_default_retrieve_columns'];
                } else {
                    $properties = 'system.id,system.icon,system.type,system.name,system.domain,system.ip,system.identification,system.description,system.manufacturer,system.os_family,system.status';
                }
            } else if ($action === 'collection' && $sub_resource !== '') {
                $properties = $sub_resource . '.*';
            }
            $log->detail = 'Set properties to ' . htmlentities($properties) . ', default';
            stdlog($log);
        }

        if ($properties === 'all' OR $properties === '*') {
            $properties = $table . '.' . implode(','.$table.'.', $instance->db->list_fields($table));
            $log->detail = 'Set properties to ' . htmlentities($properties) . ', table all';
            stdlog($log);
        }

        if ( ! empty($properties)) {
            // Validate the properties are database columns
            $properties = explode(',', $properties);
            for ($i=0; $i < count($properties); $i++) {
                if (strpos($properties[$i], '.') !== false) {
                    $temp = explode('.', $properties[$i]);
                    if ( ! $instance->db->field_exists($temp[1], $temp[0])) {
                        $log->detail = 'Invalid property supplied (' . htmlentities($properties[$i]) . '), removed.';
                        stdlog($log);
                        unset($properties[$i]);
                    }
                } else {
                    if ( ! $instance->db->field_exists($properties[$i], $table)) {
                        $log->detail = 'Invalid property supplied (' . htmlentities($properties[$i]) . '), removed.';
                        stdlog($log);
                        unset($properties[$i]);
                    }
                }
            }
        }

        if ($properties === '' && $collection !== 'devices') {
            $properties = '*';
            $log->detail = 'Set properties to ' . $properties . ', because non-devices default.';
            stdlog($log);
        }

        // perform some simple data cleansing
        if (is_array($properties)) {
            $properties = implode(',', $properties);
        }
        $temp = $properties;
        $properties = strtolower($properties);
        $properties = preg_replace('/[^A-Za-z0-9\.\_\,\*]/', '', $properties);
        if ($temp !== $properties) {
            // something was cleansed
            $log->detail = 'Properties changed due to filtering input. From ' . json_encode($temp) . ' to ' . json_encode($properties);
            stdlog($log);
        }
        return $properties;
    }
}

if ( ! function_exists('response_get_sort')) {
    /**
     * Determine the requested sort
     * @param  string $collection The request collection
     * @return string             [description]
     */
    function response_get_sort($collection = '')
    {
        $log = new stdClass();
        $log->severity = 7;
        $log->type = 'system';
        $log->object = 'response_helper';
        $log->function = 'response_helper::response_sub_resource';
        $log->status = 'parsing';
        $log->summary = 'get sub_resource';

        $instance = & get_instance();
        $sort = '';

        if ($instance->input->get('sort')) {
            $sort = $instance->input->get('sort');
        }
        if ($instance->input->post('sort')) {
            $sort = $instance->input->post('sort');
        }
        $sort = str_replace('+', '', $sort);
        if ( ! empty($sort)) {
            $properties = explode(',', $sort);
            for ($i=0; $i < count($properties); $i++) {
                $field = $properties[$i];
                if (substr($field, 0, 1) === '-') {
                    $field = substr($field, 1);
                }
                $temp = array();
                if (strpos($field, '.') !== false) {
                    $temp = explode('.', $field);
                } else {
                    $temp[0] = $collection;
                    if ($temp[0] === 'devices') {
                        $temp[0] = 'system';
                    }
                    $temp[1] = $field;
                }
                if ( ! $instance->db->field_exists($temp[1], $temp[0])) {
                    $log->severity = 5;
                    $log->detail = 'Invalid sort attribute supplied (' . htmlentities($properties[$i]) . '), removed.';
                    stdlog($log);
                    $log->severity = 7;
                    unset($properties[$i]);
                } else {
                    if (substr($properties[$i], 0, 1) === '-') {
                        $properties[$i] = $temp[0] . '.' . $temp[1] . ' DESC';
                    } else {
                        $properties[$i] = $temp[0] . '.' . $temp[1];
                    }
                }
            }
            $sort = implode(',', $properties);
        }
        if ( ! empty($sort)) {
            $log->details = 'Set sort: ' . $sort;
            stdlog($log);
        }
        return $sort;
    }
}

if ( ! function_exists('response_get_sub_resource')) {
    /**
     * Determine the requested included sub-collections
     * @param  string $collection [description]
     * @param  string $format     [description]
     * @return string The requested includes, or all valid includes, or none
     */
    function response_get_sub_resource($collection = '', $format = '')
    {
        $log = new stdClass();
        $log->severity = 7;
        $log->type = 'system';
        $log->object = 'response_helper';
        $log->function = 'response_helper::response_sub_resource';
        $log->status = 'parsing';
        $log->summary = 'get sub_resource';

        $instance = & get_instance();
        $sub_resource = '';

        // We only use include for devices.
        if ($collection !== 'devices') {
            return $sub_resource;
        }

        if ($instance->input->get('sub_resource')) {
            $sub_resource = $instance->input->get('sub_resource');
            $log->detail = 'Set include to ' . htmlentities($sub_resource) . ', according to GET.';
            stdlog($log);
        }
        if ($instance->input->post('sub_resource')) {
            $sub_resource = $instance->input->post('sub_resource');
            $log->detail = 'Set include to ' . htmlentities($sub_resource) . ', according to POST.';
            stdlog($log);
        }
        if ( ! empty($sub_resource)) {
            $valid_includes = response_valid_includes();
            if ($format === 'screen' && (empty($include) OR $include === '*' OR $include === 'all')) {
                $sub_resource = implode(',', $valid_includes);
            } else {
                $temp = explode(',', $sub_resource);
                for ($i=0; $i < count($temp); $i++) {
                    if ( ! in_array($temp[$i], $valid_includes)) {
                        unset($temp[$i]);
                    }
                }
                $sub_resource = implode(',', $temp);
            }
        }
        return $sub_resource;
    }
}

if ( ! function_exists('response_get_sub_resource_id')) {
    /**
     * Determine the ID of the sub_resource
     * @param  string $sub_resource From $response->meta
     * @return int                  The requested resource ID
     */
    function response_get_sub_resource_id($sub_resource = '')
    {
        $log = new stdClass();
        $log->severity = 7;
        $log->type = 'system';
        $log->object = 'response_helper';
        $log->function = 'response_helper::response_sub_resource';
        $log->status = 'parsing';
        $log->summary = 'get sub_resource_id';

        $instance = & get_instance();
        $sub_resource_id = '';

        if ( ! empty($sub_resource)) {
            $sub_resource_id = intval((string)urldecode($instance->uri->segment(4, '')));
            $log->detail = 'Set sub_resource_id to ' . $sub_resource_id . ', according to URI.';
            stdlog($log);
        }
        if ($instance->input->get('sub_resource_id')) {
            $sub_resource_id = intval($instance->input->get('sub_resource_id'));
            $log->detail = 'Set sub_resource_id to ' . $sub_resource_id . ', according to GET.';
            stdlog($log);
        }
        if ($instance->input->post('sub_resource_id')) {
            $sub_resource_id = intval($instance->input->post('sub_resource_id'));
            $log->detail = 'Set sub_resource_id to ' . $sub_resource_id . ', according to POST.';
            stdlog($log);
        }
        return $sub_resource_id;
    }
}

if ( ! function_exists('response_get_version')) {
    /**
     * Determine if the user specifically requested a version. If so, adjust the URI.
     * @return int The version number, defaults to 1
     */
    function response_get_version()
    {
        $log = new stdClass();
        $log->severity = 7;
        $log->type = 'system';
        $log->object = 'response_helper';
        $log->function = 'response_helper::response_get_version';
        $log->status = 'parsing';
        $log->summary = 'get version';

        $instance = & get_instance();

        // The default
        $version = 1;

        if ( ! empty($instance->uri->segments[1]) && ($instance->uri->segments[1] === 'api' OR $instance->uri->segments[1] === 'v1' OR $instance->uri->segments[1] === 'v2')) {
            if ($instance->uri->segments[1] === 'api') {
                $version = intval($instance->uri->segment(2));
                $log->detail = 'Set version to ' . intval($instance->uri->segment(2)) . ', according to URI segment.';
                unset($instance->uri->segments[1]);
                unset($instance->uri->segments[2]);

            } else if ($instance->uri->segments[1] === 'v1') {
                $version = 1;
                $log->detail = 'Set version to v1, according to URI segment.';
                unset($instance->uri->segments[1]);

            } else if ($instance->uri->segments[1] === 'v2') {
                $version = 2;
                $log->detail = 'Set version to v2, according to URI segment.';
                unset($instance->uri->segments[1]);
            }
            stdlog($log);
            array_unshift($instance->uri->segments, '');
            $instance->uri->segments = array_values($instance->uri->segments);
        } else if (strpos($_SERVER['HTTP_ACCEPT'], 'application/json;version=') !== false) {
            $version = intval(str_replace('application/json;version=', '', $_SERVER['HTTP_ACCEPT']));
            $log->detail = 'Set version to ' . $instance->response->meta->version . ', according to headers.';
            stdlog($log);
        }

        if ($version !== 1 && $version !== 2) {
            $version = 1;
        }
        return $version;
    }
}

if ( ! function_exists('response_valid_actions')) {
    /**
     * An array of valid actions
     * @return array
     */
    function response_valid_actions()
    {
        return array('bulk_update_form', 'collection', 'create', 'create_form', 'debug', 'delete', 'download', 'execute', 'export', 'export_form', 'import', 'import_form', 'read', 'reset', 'sub_resource_create', 'sub_resource_read', 'sub_resource_create_form', 'sub_resource_delete', 'sub_resource_download', 'test', 'update');
    }
}

if ( ! function_exists('response_valid_collections')) {
    /**
     * An array of valid collections
     * @return array
     */
    function response_valid_collections()
    {
        return array('agents','applications','attributes','baselines','baselines_policies','buildings','chart','clouds','clusters','collectors','configuration','connections','credentials','dashboards','database','devices','discoveries','discovery_log','discovery_scan_options','errors','fields','files','floors','graph','groups','help','integrations','invoices','invoice_items','ldap_servers','licenses','locations','logs','networks','nmis','orgs','queries','queue','racks','rack_devices','reports','roles','rooms','rows','rules','scripts','search','sessions','summaries','tasks','users','widgets');
    }
}

if ( ! function_exists('response_valid_formats')) {
    /**
     * An array of valid response formats
     * @return array
     */
    function response_valid_formats()
    {
        $valid_formats = array('json','json_data','html','screen','xml','csv','sql','table');
        return $valid_formats;
    }
}

if ( ! function_exists('response_valid_includes')) {
    /**
     * An array of valid includes
     * @return array
     */
    function response_valid_includes()
    {
        return array('application', 'attachment', 'audit_log', 'bios', 'change_log', 'cluster', 'credential', 'discovery_log', 'disk', 'dns', 'edit_log', 'field', 'file', 'image', 'ip', 'location', 'log', 'memory', 'module', 'monitor', 'motherboard', 'netstat', 'network', 'nmap', 'optical', 'pagefile', 'partition', 'policy', 'print_queue', 'processor', 'purchase', 'rack_devices', 'route', 'san', 'scsi', 'server', 'server_item', 'service', 'share', 'software', 'software_key', 'sound', 'task', 'user', 'user_group', 'variable', 'video', 'vm', 'windows');
    }
}

if ( ! function_exists('valid_reserved_words')) {
    /**
     * An array of valid URL reserved words
     * @return array
     */
    function valid_reserved_words()
    {
        return array('action', 'as_at', 'current', 'debug', 'format', 'graph', 'groupby', 'ids', 'include', 'limit', 'offset', 'properties', 'query', 'report_name', 'search', 'sort', 'sub_resource', 'sub_resource_id');
    }
}
// End of file response_helper.php
// Location: ./helpers/response_helper.php
