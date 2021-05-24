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
* @version   GIT: Open-AudIT_4.1.1
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
        $log->object = 'response_helper';
        $log->function = 'response_helper::response_create';
        $log->status = 'creating response object';
        $log->summary = '';

        $instance->load->model('m_roles');
        $instance->roles = $instance->m_roles->collection(1);
        $instance->load->model('m_users');

        // Define our constants for use in htmlspecialchars
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
        $response->meta->current = 'y';
        $response->meta->debug = false;
        $response->meta->debug = true;
        $response->meta->filtered = '';
        $response->meta->format = '';
        $response->meta->groupby = '';
        $response->meta->header = 'HTTP/1.1 200 OK';
        $response->meta->id = null;
        // $response->meta->ids = null; // Only set below if it contains data
        $response->meta->include = '';
        $response->meta->limit = '';
        $response->meta->offset = 0;
        $response->meta->properties = '';
        // NOTE see response_get_query_filter for why we do the below with the query string
        $response->meta->query_string = urldecode($_SERVER['QUERY_STRING']);
        $response->meta->query_string = str_replace('&amp;', '&', $response->meta->query_string);
        $response->meta->request_method = strtoupper($instance->input->server('REQUEST_METHOD'));
        $response->meta->requestor = '';
        if ( ! empty($_SERVER['HTTP_REQUESTOR'])) {
            $response->meta->requestor = (string)$_SERVER['HTTP_REQUESTOR'];
        }
        $response->meta->sort = '';
        $response->meta->sub_resource = '';
        // $response->meta->sub_resource_id = 0; // Only set below if it contains data
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

        // Need to set version FIRST because it may impact routes
        $response->meta->version = response_get_version($instance->uri->segments,
                                                        $instance->input->get_request_header('Accept'));

        // Refactor the uri->segments to remove /api/1 or /v1, /v2, etc
        $instance->uri->segments = response_set_uri($instance->uri->segments);

        // no dependencies - set in GET or POST
        $response->meta->debug = response_get_debug($instance->input->get('debug'),
                                                    $instance->input->post('debug'),
                                                    $instance->input->get_request_header('debug'));

        // no dependencies - set in GET or POST or HEADERS
        $response->meta->format = response_get_format($instance->input->get('format'),
                                                      $instance->input->post('format'),
                                                      $instance->input->get_request_header('Accept'));

        // no dependencies - set in GET or POST or HEADERS
        $response->meta->current = response_get_current($instance->input->get('current'),
                                                        $instance->input->post('current'));

        // depends on version affecting URI - set in URI or POST
        $response->meta->collection = response_get_collection($instance->uri->segment(1));

        // Set the heading based on the collection
        $response->meta->heading = ucfirst($response->meta->collection);

        // depends on version affecting URI, collection, request_method, format
        if ($response->meta->collection === 'search' && $response->meta->request_method !== 'POST') {
            // Redirect as we only accept POSTs for /search
            log_error('ERR-0007', 'search:' . $response->meta->request_method);
            if ($response->meta->format !== 'screen') {
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
        $response->meta->id = response_get_id(html_entity_decode(urldecode($instance->uri->segment(2))),
                                              $response->meta->collection,
                                              $instance->user->org_list);

        // no dependencies - set in GET or POST
        $temp = response_get_ids($instance->input->get('ids'), $instance->input->post('ids'));
        // Only set if not empty
        if ( ! empty($temp)) {
            $response->meta->ids = $temp;
        }

        // no dependencies - set in PATCH or POST, can set ID
        $response->meta->received_data = response_get_data($response->meta->request_method);
        if ( ! empty($response->meta->received_data->id)) {
            if ($response->meta->collection !== 'database' && $response->meta->collection !== 'configuration') {
                $response->meta->id = intval($response->meta->received_data->id);
            }
        }

        // depends on version affecting URI, collection and format
        $response->meta->sub_resource = response_get_sub_resource($instance->input->get('sub_resource'),
                                                                  $instance->input->post('sub_resource'),
                                                                  $instance->uri->segment(3, ''),
                                                                  $response->meta->collection,
                                                                  $response->meta->format);

        // depends on version affecting URI
        $temp = response_get_sub_resource_id(intval((string)urldecode($instance->uri->segment(4, ''))),
                                            $instance->input->get('id'),
                                            $instance->input->post('id'));
        if ( ! empty($temp)) {
            $response->meta->sub_resource_id = $temp;
        }

        // depends on id, ids, recevied_data, request_method, sub_resource and sub_resource_id
        $response->meta->action = response_get_action($response);

        // If we're creating data (POST), we should have an access token (configuration depending)
        if ( ! empty($response->meta->received_data)) {
            if ($response->meta->request_method === 'POST' && ! empty($instance->config->config['access_token_enable']) && $instance->config->config['access_token_enable'] === 'y') {
                if (empty($response->meta->received_data->access_token)) {
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

        // depends on action
        if ($response->meta->action === 'create' OR $response->meta->action === 'import') {
            $response->meta->header = 'HTTP/1.1 201 Created';
        }

        // depends on collection and format
        $response->meta->include = response_get_include($instance->input->get('include'),
                                                        $instance->input->post('include'),
                                                        $response->meta->collection,
                                                        $response->meta->format);

        // depends on version affecting URI, collection
        $response->meta->sort = response_get_sort($response->meta->collection, $instance->input->get('sort'), $instance->input->post('sort'));
        $response->meta->internal->sort = '';
        if ($response->meta->sort !== '') {
            $response->meta->internal->sort = 'ORDER BY ' . $response->meta->sort;
        }

        // depends on version affecting URI, collection
        $response->meta->groupby = response_get_groupby($instance->input->get('groupby'),
                                                        $instance->input->post('groupby'),
                                                        $response->meta->collection);
        $response->meta->internal->groupby = '';
        if ($response->meta->groupby) {
            $response->meta->internal->groupby = 'GROUP BY ' . $response->meta->groupby;
        }

        // no dependencies - set in GET or POST
        $response->meta->offset = response_get_offset($instance->input->get('offset'), $instance->input->post('offset'));

        // depends on format - set in GET or POST
        $response->meta->limit = response_get_limit($instance->input->get('limit'),
                                                    $instance->input->post('limit'),
                                                    $response->meta->format,
                                                    @$instance->config->config['page_size']);

        // depends on offset
        $response->meta->internal->limit = '';
        if ( ! empty($response->meta->limit)) {
            $response->meta->internal->limit = 'LIMIT ' . intval($response->meta->offset) . ',' . intval($response->meta->limit);
        }

        // depends on collection
        $response->meta->properties = response_get_properties($response->meta->collection,
                                                                $response->meta->action,
                                                                $response->meta->sub_resource,
                                                                $instance->input->get('properties'),
                                                                $instance->input->post('properties'));

        // depends on properties, collection, sub_resource
        $response->meta->internal->properties = response_get_internal_properties($response->meta->properties, $response->meta->collection, $response->meta->sub_resource);

        // depends on query string
        $response->meta->filter = response_get_query_filter($response->meta->query_string, 'filter');

        // depends on query string
        $response->meta->query_parameters = response_get_query_filter($response->meta->query_string, 'query');

        // depends on filter
        // $response->meta->query_parameters = $response->meta->filter;

        $response->meta->internal->filter = response_get_internal_filter($response->meta->filter, $response->meta->collection);

        if ($response->meta->collection === 'devices') {
            $response->meta->internal->join = response_get_internal_join($response->meta->filter, $response->meta->collection);
        }

        $response->links = response_get_links($response->meta->collection, $response->meta->id, $response->meta->sub_resource, @$response->meta->sub_resource_id);

        $permission = response_get_permission_ca($instance->user, $response->meta->collection, $response->meta->action, $response->meta->received_data, $response->meta->id);
        if ( ! $permission) {
            if ($response->meta->format === 'json') {
                $response->meta->header = 'HTTP/1.1 403 Forbidden';
                $response->errors = array();
                $response->errors[] = getError('ERR-0007', 'response_helper');
                header($response->meta->header);
                echo json_encode($response);
                exit;
            } else {
                $instance->session->set_flashdata('error', 'Permission denied for collection / action.');
                redirect($response->meta->collection);
            }
            redirect('/');
        }

        $permission = response_get_permission_id($instance->user, $response->meta->collection, $response->meta->action, $response->meta->received_data, $response->meta->id);
        if ( ! $permission) {
            if ($response->meta->format === 'json') {
                $response->meta->header = 'HTTP/1.1 403 Forbidden';
                $response->errors = array();
                $response->errors[] = getError('ERR-0007', 'response_helper');
                header($response->meta->header);
                echo json_encode($response);
                exit;
            } else {
                $instance->session->set_flashdata('error', 'Permission denied for OrgID.');
                redirect($response->meta->collection);
            }
            redirect('/');
        }
        if ( ! empty($instance->response->logs)) {
            $response->logs = $instance->response->logs;
        }
        return $response;
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
        $log->function = 'response_helper::response_get_action';
        $log->status = 'parsing';
        $log->summary = '';

        $instance = & get_instance();
        $collection = $response->meta->collection;
        $id = $response->meta->id;
        // NOTE - devices IDs may or may not be set. We only test for ! empty, so @ is fine.
        $device_ids = @$response->meta->ids;
        $received_data = $response->meta->received_data;
        $request_method = $response->meta->request_method;
        $sub_resource = $response->meta->sub_resource;
        // NOTE - sub_resource_id may or may not be set. We only test for ! empty, so @ is fine.
        $sub_resource_id = @$response->meta->sub_resource_id;
        $action = '';
        $valid_actions = response_valid_actions();

        if (in_array($instance->uri->segment(2), $valid_actions)) {
            $action = $instance->uri->segment(2);
        }
        if (empty($action) && in_array($instance->uri->segment(3), $valid_actions)) {
            $action = $instance->uri->segment(3);
        }
        if (isset($_GET['action']) && in_array($_GET['action'], $valid_actions)) {
            $action = $_GET['action'];
            $log->summary = 'Set collection according to GET.';
        }
        if (isset($_POST['action']) && in_array($_POST['action'], $valid_actions)) {
            $action = $_POST['action'];
            $log->summary = 'Set collection according to POST.';
        }
        if ($request_method === 'GET' && empty($id) && $action === '') {
            $action = 'collection';
            $log->summary = 'Set action because GET, no id, no action.';
        }
        if ($request_method === 'GET' && empty($id) && $action === 'reset') {
            $action = 'reset';
            $log->summary = 'Set action because GET, action = reset.';
        }
        if ($request_method === 'GET' && empty($id) && $action === 'create') {
            $action = 'create_form';
            $log->summary = 'Set action because GET, no id and action = create.';
        }
        if ($request_method === 'GET' && $action === 'create' &&  ! empty($sub_resource) && empty($sub_resource_id)) {
            $action = 'sub_resource_create_form';
            $log->summary = 'Set action because GET, sub_resource, no sub_resource_id and action = create.';
        }
        if ($request_method === 'GET' && $action === 'sub_resource_read' && ! empty($sub_resource)) {
            $action = 'sub_resource_read';
            $log->summary = 'Set action because GET, sub_resource and action = sub_resource_read.';
        }
        if ($request_method === 'GET' && $action === 'download' && $sub_resource !== '' && ! empty($sub_resource_id)) {
            $action = 'sub_resource_download';
            $log->summary = 'Set action because GET, sub_resource, sub_resource_id and action = download.';
        }
        if ($request_method === 'GET' && $action === 'import' && empty($id)) {
            $action = 'import_form';
            $log->summary = 'Set action because GET, no id and action = import.';
        }
        if ($request_method === 'GET' && $action === '' && ! empty($id)) {
            $action = 'read';
            $log->summary = 'Set action because GET, id and no action.';
        }
        if ($request_method === 'GET' && $action === 'test' && ! empty($id)) {
            $action = 'test';
            $log->summary = 'Set action because GET, id and action = test.';
        }
        if ($action === 'update' && $collection === 'database') {
            // Special case for the database endpoint
            $action = 'update';
            $log->summary = 'Set action because collection = database and action = update.';
        }
        if ($request_method === 'GET' && $action === 'execute' && $collection === 'database' && ! empty($sub_resource)) {
            $action = 'execute';
            $log->summary = 'Set action because GET, collection = database and action = execute';
        }
        if ($request_method === 'GET' && $action === 'execute' && ! empty($id)) {
            $action = 'execute';
            $log->summary = 'Set action because GET, id and action = execute';
        }
        if ($request_method === 'GET' && $action === 'update' && empty($id) && ! empty($device_ids)) {
            $action = 'bulk_update_form';
            $log->summary = 'Set action because GET, ids, no id and action = update.';
        }
        if ($request_method === 'GET' && $action === 'download' && ! empty($id) && empty($sub_resource)) {
            $action = 'download';
            $log->summary = 'Set action because GET, id and action = download.';
        }
        if ($request_method === 'POST' && $action === '' && empty($id) &&  ! empty($received_data)) {
            $action = 'create';
            $log->summary = 'Set action because POST, data, no id and no action.';
        }
        if ($request_method === 'POST' && $action === '' && empty($id) && empty($received_data)) {
            $action = 'collection';
            $log->summary = 'Set action because POST, no id, no data and no action.';
        }
        if ($request_method === 'POST' && $action === 'import' && empty($id)) {
            $action = 'import';
            $log->summary = 'Set action because POST, no id and action = import.';
        }
        if ($request_method === 'POST' && $action === 'update' && empty($id) && ! empty($device_ids)) {
            $action = 'update';
            $log->summary = 'Set action because POST, ids, no id and action = update.';
        }
        if ($request_method === 'POST' && $action === 'update' && empty($id) && $collection === 'database') {
            $action = 'update';
            $log->summary = 'Set action because POST, no id, collection is database and action = update.';
        }
        if (($request_method === 'PUT' OR $request_method === 'PATCH') && $action === '' && ! empty($id)) {
            $action = 'update';
            $log->summary = 'Set action because PATCH/PUT, id and no action.';
        }
        if ($request_method === 'PATCH' && ! empty($device_ids)) {
            $action = 'update';
            $log->summary = 'Set action because PATCH, ids and no id.';
        }
        if ($request_method === 'POST' && ( ! empty($id) OR ! empty($device_ids)) && ! empty($sub_resource)) {
            $action = 'sub_resource_create';
            $log->summary = 'Set action because POST, id, sub_resource.';
        }
        if ($request_method === 'DELETE' && ! empty($id) && empty($sub_resource)) {
            $action = 'delete';
            $log->summary = 'Set action because DELETE, id.';
        }
        if ($request_method === 'DELETE' && ! empty($id) && ! empty($sub_resource) && ! empty($sub_resource_id)) {
            $action = 'sub_resource_delete';
            $log->summary = 'Set action because DELETE, id, sub_resource, sub_resource_id.';
        }
        if ($action === '') {
            $action = 'collection';
            $log->summary = 'Set action because no action.';
        }
        if ( ! in_array($action, $valid_actions)) {
            $action = 'collection';
            $log->summary = 'Set action because not in allowed action list.';
        }
        if ($action !== '') {
            $log->detail = 'ACTION: ' . $action;
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
        $log->summary = '';

        $collections = response_valid_collections();

        if ( ! empty($collection)) {
            if (in_array($collection, $collections)) {
                $log->summary = 'Set collection according to GET.';
            } else {
                $log->summary = 'Collection set to summaries as invalid collection supplied.';
                $log->summary = 5;
                $collection = 'summaries';
            }
        } else {
            $log->summary = 'Collection set to summaries as no collection supplied.';
            $log->summary = 5;
            $collection = 'summaries';
        }
        if ( ! empty($collection)) {
            $log->detail = 'COLLECTION: ' . $collection;
            stdlog($log);
        }
        return $collection;
    }
}


if ( ! function_exists('response_get_current')) {
    /**
     * Return the current attribute derived from the URL (get) or BODY (post)
     * @return string The response format requested
     */
    function response_get_current($get = '', $post = '')
    {
        $log = new stdClass();
        $log->severity = 7;
        $log->type = 'system';
        $log->object = 'response_helper';
        $log->function = 'response_helper::response_get_current';
        $log->status = 'parsing';
        $log->summary = '';

        $current = 'y';
        $valid_current = response_valid_current();
        $log->summary = 'Set current to default.';

        if ( ! empty($get)) {
            $current = $get;
            $log->summary = 'Set current according to GET.';
        }
        if ( ! empty($post)) {
            $current = $post;
            $log->summary = 'Set current according to POST.';
        }
        if ( ! in_array($current, $valid_current)) {
            $log->summary = 'Set current to y, because unknown current: ' . $current;
            $log->status = 'warning';
            $current = 'y';
        }
        $log->detail = 'CURRENT: ' . $current;
        stdlog($log);
        return $current;
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
        $log->summary = '';

        $data_supplied_by = '';
        $received_data = array();

        if ($request_method === 'POST') {
            if ( ! empty($_POST['data']) && is_array($_POST['data'])) {
                $log->summary = 'Set received data according to POST (form).';
                $received_data = $_POST['data'];
                $received_data = json_encode($received_data);
                $received_data = json_decode($received_data);
                $log->detail = 'Data has been supplied via POST HTML form.';
                $data_supplied_by = 'form';
            } else if ( ! empty($_POST['data'])) {
                $log->summary = 'Set received data according to POST (json).';
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
                // 
            } else {
                $log->summary = 'Set received data according to PATCH.';
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
        if ( ! empty($received_data)) {
            $log->detail = 'RECEIVED DATA: ' . json_encode($received_data);
            stdlog($log);
        }
        return $received_data;
    }
}

if ( ! function_exists('response_get_debug')) {
    /**
     * Determine if the request uses debug
     * @return bool
     */
    function response_get_debug($get = '', $post = '', $header = '')
    {
        $log = new stdClass();
        $log->severity = 7;
        $log->type = 'system';
        $log->object = 'response_helper';
        $log->function = 'response_helper::response_get_debug';
        $log->status = 'parsing';
        $log->summary = '';

        $instance = & get_instance();
        $debug = false;
        $instance->output->enable_profiler(false);

        if ( ! empty($get) && strtolower($get) === 'true') {
            $log->summary = 'Set debug according to GET.';
            $log->detail = 'DEBUG: true';
            $instance->output->enable_profiler(true);
            $instance->config->config['log_level'] = 7;
            $debug = true;
            stdlog($log);
        }
        if ( ! empty($post) && strtolower($post) === 'true') {
            $log->summary = 'Set debug according to POST.';
            $log->detail = 'DEBUG: true';
            $instance->output->enable_profiler(true);
            $instance->config->config['log_level'] = 7;
            $debug = true;
            stdlog($log);
        }
        if ( ! empty($header) && strtolower($header) === 'true') {
            $log->summary = 'Set debug according to HEADER.';
            $log->detail = 'DEBUG: true';
            $instance->output->enable_profiler(true);
            $instance->config->config['log_level'] = 7;
            $debug = true;
            stdlog($log);
        }
        return $debug;
    }
}

if ( ! function_exists('response_get_query_filter')) {
    /**
     * [response_get_filter description]
     * @param  [type] $query_string [description]
     * @return [type]               [description]
     */
    function response_get_query_filter($query_string, $type = '')
    {
        $log = new stdClass();
        $log->severity = 7;
        $log->type = 'system';
        $log->object = 'response_helper';
        $log->function = 'response_helper::response_get_filter';
        $log->status = 'parsing';
        $log->summary = '';

        $instance = & get_instance();
        $reserved_words = response_valid_reserved_words();
        $filter = array();

        // NOTE - Had to create our own parsing routine because PHP replaces .'s with underscores
        //        in incoming variable names. The unfortunate result is that we can not use a . in
        //        a variable value when using GET (so no system.manufacturer=Dell, for example)
        //        PHP Bug Report - https://bugs.php.net/bug.php?id=45272
        //        PHP Docs - https://php.net/manual/en/language.variables.external.php

        if (empty($query_string)) {
            return array();
        }

        if ( ! empty($query_string)) {
            foreach (explode('&', $query_string) as $item) {
                $query = new stdClass();
                $query->name = substr($item, 0, strpos($item, '='));
                $query->operator = '';
                $query->value = str_replace($query->name.'=', '', $item);

                if (strtolower(substr($query->value, 0, 8)) === 'not like') {
                    $query->value = '%' . substr($query->value, 8) . '%';
                    $query->operator = 'not like';
                    // $query->value = str_replace('"', '\"', $query->value);
                    $query->value = mysqli_real_escape_string($instance->db->conn_id, $query->value);
                }

                if (strtolower(substr($query->value, 0, 5)) === '!like') {
                    $query->value = '%' . substr($query->value, 5) . '%';
                    $query->operator = 'not like';
                    // $query->value = str_replace('"', '\"', $query->value);
                    $query->value = mysqli_real_escape_string($instance->db->conn_id, $query->value);
                }

                $operator = substr($query->value, 0, 4);
                if (strtolower($operator) === 'like') {
                    $query->value = '%' . substr($query->value, 4) . '%';
                    $query->operator = $operator;
                    // $query->value = str_replace('"', '\"', $query->value);
                    $query->value = mysqli_real_escape_string($instance->db->conn_id, $query->value);
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
                            // $value = str_replace('\"', '"', $value);
                            // $value = str_replace('"', '\"', $value);
                            $value = mysqli_real_escape_string($instance->db->conn_id, $value);
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
                            // $value = str_replace('\"', '"', $value);
                            // $value = str_replace('"', '\"', $value);
                            $value = mysqli_real_escape_string($instance->db->conn_id, $value);
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
                    // $query->value = str_replace('"', '\"', $query->value);
                    $query->value = mysqli_real_escape_string($instance->db->conn_id, $query->value);
                }

                $operator = substr($query->value, 0, 1);
                if ($operator === '=' OR $operator === '>' OR $operator === '<') {
                    $query->value = substr($query->value, 1);
                    $query->operator = $operator;
                    // $query->value = str_replace('"', '\"', $query->value);
                    $query->value = mysqli_real_escape_string($instance->db->conn_id, $query->value);
                }

                if (empty($query->operator)) {
                    $query->operator = '=';
                    $query->value = mysqli_real_escape_string($instance->db->conn_id, $query->value);
                }

                $query->name = preg_replace('/[^A-Za-z0-9\.\_]/', '', $query->name);

                if ($query->value === false) {
                    $query->value = '';
                }

                // Accept first_seen, last_seen, edited_date and timestamp as numeric unix_timestamp's and convert them to a local timestamp string
                $item = substr($query->name, strpos($query->name, '.')+1);
                if (($item === 'first_seen' OR $item === 'last_seen' OR $item === 'when' OR $item === 'edited_date' OR $item === 'timestamp') && is_numeric($query->value)) {
                    if ($query->operator === 'like' OR $query->operator === 'not like') {
                        $query->value = str_replace('%', '', $query->value);
                    }
                    $query->value = from_unix_timestamp($query->value);
                    if ($query->operator === 'like' OR $query->operator === 'not like') {
                        $query->value = '%' . $query->value . '%';
                    }
                }

                if ( ! empty($query->name) && ! in_array($query->name, $reserved_words) && $type === 'filter') {
                    $filter[] = $query;
                }

                if ($type === 'query') {
                    $filter[] = $query;
                }
            }
        }
        if ( ! empty($filter)) {
            $log->detail = strtoupper($type) .': ' . json_encode($filter);
            stdlog($log);
        }
        return $filter;
    }
}

if ( ! function_exists('response_get_format')) {
    /**
     * Return the response format derived from the HEADERS or URL (get) or BODY (post)
     * @return string The response format requested
     */
    function response_get_format($get = '', $post = '', $header = '')
    {
        $log = new stdClass();
        $log->severity = 7;
        $log->type = 'system';
        $log->object = 'response_helper';
        $log->function = 'response_helper::response_get_format';
        $log->status = 'parsing';
        $log->summary = '';

        $format = 'json';

        if (strpos($header, 'application/json') !== false) {
            $format = 'json';
            $log->summary = 'Set format according to HEADERS.';
        }
        if (strpos($header, 'html') !== false) {
            $format = 'screen';
            $log->summary = 'Set format according to HEADERS.';
        }
        if ( ! empty($get)) {
            $format = $get;
            $log->summary = 'Set format according to GET.';
        }
        if ( ! empty($post)) {
            $format = $post;
            $log->summary = 'Set format according to POST.';
        }
        $valid_formats = response_valid_formats();
        if ( ! in_array($format, $valid_formats)) {
            $log->summary = 'Set format to json, because unknown format: ' . $format;
            $log->status = 'warning';
            $format = 'json';
        }
        $log->detail = 'FORMAT: ' . $format;
        stdlog($log);
        return $format;
    }
}

if ( ! function_exists('response_get_groupby')) {
    /**
     * Determine and validate the requested groupby
     * @param  string $collection The request collection
     * @return string             The validated groupby
     */
    function response_get_groupby($get = '', $post = '', $collection = '')
    {
        $log = new stdClass();
        $log->severity = 7;
        $log->type = 'system';
        $log->object = 'response_helper';
        $log->function = 'response_helper::response_get_groupby';
        $log->status = 'parsing';
        $log->summary = '';

        $instance = & get_instance();
        $groupby = '';

        if ( ! empty($get)) {
            $groupby = $get;
            $log->summary = 'Set groupby according to GET.';
        }
        if ( ! empty($post)) {
            $groupby = $post;
            $log->summary = 'Set groupby according to POST.';
        }
        if ( ! empty($groupby)) {
            if (strpos($groupby, '.') !== false) {
                $temp = explode('.', $groupby);
                if ( ! $instance->db->field_exists($temp[1], $temp[0])) {
                    $groupby = '';
                    $log->detail = "Invalid groupby supplied ({$groupby}), removed.";
                    stdlog($log);
                } else {
                    $groupby = $temp[0] . '.' . $temp[1];
                }
            } else {
                $temp = $collection;
                if ($temp === 'devices') {
                    $temp = 'system';
                }
                if ( ! $instance->db->field_exists($groupby, $temp)) {
                    $groupby = '';
                    $log->detail = "Invalid groupby supplied ({$groupby}), removed.";
                    stdlog($log);
                } else {
                    $groupby = $temp . '.' . $groupby;
                }
            }
        }
        if ($groupby !== '') {
            $log->detail = 'GROUPBY: ' . $groupby;
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
        $log->summary = '';

        $instance = & get_instance();

        if (empty($id)) {
            $log->summary = 'No ID provided, returning NULL.';
            $log->detail = 'ID: null';
            stdlog($log);
            return null;
        }
        if (is_numeric($id)) {
            // we have a number, return that
            $log->summary = 'Number ID provided, returning integer.';
            $log->detail = 'ID: ' . intval($id);
            stdlog($log);
            return intval($id);
        } else {
            $actions = response_valid_actions();
            $collections = response_valid_collections();
            $no_org_id = array('chart', 'configuration', 'database', 'errors', 'help', 'logs', 'nmis', 'reports', 'roles', 'search', 'sessions');
            if ( ! in_array($id, $actions)) {
                // Our 'id' is a string, but not an action - therefore it's a name
                if ($collection === 'database') {
                    $instance = & get_instance();
                    $tables = $instance->db->list_tables();
                    // add an entry for devices collection <-> system table
                    $tables[] = 'devices';
                    $log->summary = 'ID to Name match in database';
                    if ( ! in_array($id, $tables)) {
                        $log->summary = 'No ID to Name match in database';
                        $id = null;
                    }
                } else if ($collection === 'configuration') {
                    $sql = '/* response_helper::response_get_id */ ' . "SELECT id FROM `configuration` WHERE name = ? ORDER BY id DESC LIMIT 1";
                    $data = array($id);
                    $query = $instance->db->query($sql, $data);
                    $result = $query->result();
                    if ( ! empty($result)) {
                        $log->summary = 'ID to Name match in configuration';
                        $id = intval($result[0]->id);
                    } else {
                        $log->summary = 'No ID to Name match in configuration';
                        $id = null;
                    }
                } else if ($collection === 'devices') {
                    // devices -> system table
                    $sql = '/* response_helper::response_get_id */ ' . "SELECT id FROM system WHERE name LIKE ? AND org_id IN ({$org_list}) ORDER BY id DESC LIMIT 1";
                    $data = array($id);
                    $query = $instance->db->query($sql, $data);
                    $result = $query->result();
                    if ( ! empty($result)) {
                        $log->summary = 'ID to Name match in devices';
                        $id = intval($result[0]->id);
                    } else {
                        $log->summary = 'No ID to Name match in devices';
                        $id = null;
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
                        $log->summary = 'ID to Name match in users';
                        $id = intval($result[0]->id);
                    } else {
                        $log->summary = 'No ID to Name match in users';
                        $id = null;
                    }
                } else if ($collection === 'orgs') {
                    // orgs.id, not *.org_id
                    $sql = '/* response_helper::response_get_id */ ' . "SELECT id FROM orgs WHERE name LIKE ? AND id IN ({$org_list}) ORDER BY id DESC LIMIT 1";
                    $data = array($id);
                    $query = $instance->db->query($sql, $data);
                    $result = $query->result();
                    if ( ! empty($result)) {
                        $log->summary = 'ID to Name match in orgs';
                        $id = intval($result[0]->id);
                    } else {
                        $log->summary = 'No ID to Name match in orgs';
                        $id = null;
                    }
                } else if ($collection === 'baselines_policies') {
                    // baselines_policies.baseline_id -> baselines.id -> baselines.org_id
                    $sql = '/* response_helper::response_get_id */ ' . "SELECT baselines_policies.id FROM baselines_policies LEFT JOIN baselines ON (baselines_policies.baseline_id = baselines.id) WHERE baselines_policies.name LIKE ? AND baselines.org_id IN ({$org_list}) ORDER BY id DESC LIMIT 1";
                    $data = array($id);
                    $query = $instance->db->query($sql, $data);
                    $result = $query->result();
                    if ( ! empty($result)) {
                        $log->summary = 'ID to Name match in baselines_policies';
                        $id = intval($result[0]->id);
                    } else {
                        $log->summary = 'No ID to Name match in baselines_policies';
                        $id = null;
                    }
                } else if (in_array($collection, $no_org_id)) {
                    $log->summary = 'No ID required for ' . $collection;
                    $id = 1;
                } else if (in_array($collection, $collections)) {
                    $sql = '/* response_helper::response_get_id */ ' . "SELECT id FROM {$collection} WHERE name LIKE ? AND org_id IN ({$org_list}) ORDER BY id DESC LIMIT 1";
                    $data = array($id);
                    $query = $instance->db->query($sql, $data);
                    $result = $query->result();
                    if ( ! empty($result)) {
                        $log->summary = 'ID to Name match in ' . $collection;
                        $id = intval($result[0]->id);
                    } else {
                        $log->summary = 'No ID to Name match in ' . $collection;
                        $id = null;
                    }
                }
                $log->detail = 'ID: ' . @$id;
                stdlog($log);
                if (empty($id)) {
                    log_error('ERR-0046');
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
    function response_get_ids($get = '', $post = '')
    {
        $log = new stdClass();
        $log->severity = 7;
        $log->type = 'system';
        $log->object = 'response_helper';
        $log->function = 'response_helper::response_get_ids';
        $log->status = 'parsing';
        $log->summary = '';

        $device_ids = '';

        if ( ! empty($get)) {
            $device_ids = $get;
            $log->summary = 'Set IDs according to GET.';
        }
        if ( ! empty($post)) {
            $device_ids = $post;
            $log->summary = 'Set IDs according to POST.';
        }
        if ($device_ids !== '') {
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
            $log->detail = 'IDS: ' . $device_ids;
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
    function response_get_include($get = '', $post = '', $collection = '', $format = '')
    {
        $log = new stdClass();
        $log->severity = 7;
        $log->type = 'system';
        $log->object = 'response_helper';
        $log->function = 'response_helper::response_get_include';
        $log->status = 'parsing';
        $log->summary = '';

        $include = '';
        $valid_includes = response_valid_includes();

        // We only use include for devices.
        if ($collection !== 'devices') {
            return $include;
        }

        if ( ! empty($get)) {
            $include = $get;
            $log->summary = 'Set include according to GET. ';
        }
        if ( ! empty($post)) {
            $include = $post;
            $log->sumary = 'Set include according to POST. ';
        }
        if (($format === 'screen' && empty($include)) OR $include === '*' OR $include === 'all') {
            $include = implode(',', $valid_includes);
        } else {
            if ( ! empty($include)) {
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
            $log->detail = "INCLUDE: {$include}";
            stdlog($log);
        }
        return $include;
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
        $log->summary = '';

        $instance = & get_instance();
        $reserved_words = response_valid_reserved_words();
        $internal_filter = '';

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
            if (is_string($instance->user->org_list)) {
                $org_list = $instance->user->org_list;
            } else {
                $org_list = implode(',', $instance->user->org_list);
            }
            if ($internal_filter !== '') {
                $internal_filter = substr($internal_filter, 5);
                $internal_filter = ' WHERE orgs.id IN (' . $org_list . ') AND ' . $internal_filter;
            } else {
                $internal_filter = ' WHERE orgs.id IN (' . $org_list . ')';
            }
        }
        if ($collection === 'configuration' OR $collection === 'logs' ) {
            if ($internal_filter !== '') {
                $internal_filter = ' WHERE ' . substr($internal_filter, 4);
            } else {
                $internal_filter = '';
            }
        }
        if ($internal_filter !== '') {
            $log->detail = 'INTERNAL FILTER: ' . json_encode($internal_filter);
            stdlog($log);
        }
        return $internal_filter;
    }
}

if ( ! function_exists('response_get_internal_join')) {
    /**
     * [response_get_internal_join description]
     * @param  [type] $filter     [description]
     * @param  [type] $collection [description]
     * @return [type]             [description]
     */
    function response_get_internal_join($filter, $collection)
    {
        $log = new stdClass();
        $log->severity = 7;
        $log->type = 'system';
        $log->object = 'response_helper';
        $log->function = 'response_helper::response_get_internal_join';
        $log->status = 'parsing';
        $log->summary = '';

        $join = '';

        if ($collection === 'devices') {
            $valid_sub_resources = response_valid_sub_resources();
            $used_sub_resources = array();
            if ( ! empty($filter) && is_array($filter) && count($filter) > 0) {
                foreach ($filter as $item) {
                    if (strpos($item->name, '.') !== false) {
                        $table = substr($item->name, 0, strpos($item->name, '.'));
                        if (in_array($table, $valid_sub_resources) && ! in_array($table, $used_sub_resources)) {
                            $join .= ' LEFT JOIN `' . $table . '` ON (system.id = `' . $table . '`.system_id) ';
                        }
                        $used_sub_resources[] = $table;
                    }
                }
            }
        }
        if ($join !== '') {
            $log->detail = 'JOIN: ' . $join;
            stdlog($log);
        }
        return $join;
    }
}

if ( ! function_exists('response_get_internal_properties')) {
    /**
     * [response_get_internal_properties description]
     * @param  string $properties   [description]
     * @param  string $collection   [description]
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
        $log->summary = '';

        $internal_properties = '';

        // create our internal properties list - this is what gets executed in SQL
        if ($properties !== '*' && $properties !== $sub_resource . '.*' && $properties !== '') {
            $temp = explode(',', $properties);
            foreach ($temp as $property) {
                if ($property === 'count' && $collection !== 'chart') {
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
        if ($properties === '*' or $properties === '.*') {
            $temp = $collection;
            if ($temp === 'devices') {
                $temp = 'system';
            }

            // Uncomment the below to enable fully qualified column names.
            // NOTE - this would break the current HTML templates and change the API response.
            // Maybe enable for v2 (if ever)
            // $fields = $instance->db->list_fields($temp);
            // for ($i=0; $i < count($fields); $i++) {
            //     $fields[$i] = $temp . '.' . $fields[$i] . ' AS `' . $temp . '.' . $fields[$i] . '`';
            // }
            // $internal_properties = implode(', ', $fields);

            $internal_properties = '`' . $temp . '`.*';
        }
        if ( ! empty($internal_properties)) {
            $log->detail = 'INTERNAL PROPERTIES: ' . $internal_properties;
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
    function response_get_limit($get = '', $post = '', $format = '', $default_limit = 1000)
    {
        $log = new stdClass();
        $log->severity = 7;
        $log->type = 'system';
        $log->object = 'response_helper';
        $log->function = 'response_helper::response_get_limit';
        $log->status = 'parsing';
        $log->summary = '';

        $limit = 0;

        if ( ! empty($get)) {
            $limit = intval($get);
            $log->summary = 'Set limit according to GET.';
        }
        if ( ! empty($post)) {
            $limit = intval($post);
            $log->summary = 'Set limit according to POST.';
        }
        if ($format === 'screen' && empty($limit)) {
            $limit = intval($default_limit);
            $log->summary = 'Set limit according to SCREEN default.';
        }
        if ($format === 'json' && empty($limit)) {
            $limit = intval($default_limit);
            $log->summary = 'Set limit according to JSON default.';
        }
        if ( ! empty($limit)) {
            $log->detail = 'LIMIT: ' . $limit;
            stdlog($log);
        }
        return $limit;
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

if ( ! function_exists('response_get_offset')) {
    /**
     * Determine the requested offset
     * @return [type] [description]
     */
    function response_get_offset($get = '', $post = '')
    {
        $log = new stdClass();
        $log->severity = 7;
        $log->type = 'system';
        $log->object = 'response_helper';
        $log->function = 'response_helper::response_get_offset';
        $log->status = 'parsing';
        $log->summary = '';

        $offset = 0;

        if ( ! empty($get)) {
            $offset = intval($get);
            $log->summary = 'Set offset according to GET.';
            stdlog($log);
        }
        if ( ! empty($post)) {
            $offset = intval($post);
            $log->summary = 'Set offset according to POST.';
            stdlog($log);
        }
        if ( ! empty($offset)) {
            $log->detail = 'OFFSET: ' . $offset;
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
        $log->summary = '';

        $instance = & get_instance();
        $org_list = array();

        if ($collection === '' OR $user === null) {
            $log->severity = 5;
            $log->detail = 'Either no collection or no user supplied.';
            stdlog($log);
            return;
        }
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
            case 'search':
            case 'tasks':
            case 'users':
                $log->summary = 'Set org_list according to ' . $collection . ' for DESCENDANTS.';
                $org_list = array_unique(array_merge($user->orgs, $instance->m_orgs->get_user_descendants($user->id)));
                break;

            case 'configuration':
            case 'database':
            case 'errors':
            case 'help':
            case 'nmis':
            case 'san':
            case 'test':
            case 'util':
                $log->summary = 'Set org_list according to ' . $collection . ' for USER.';
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
                $log->summary = 'Set org_list according to ' . $collection . ' for PARENTS and DESCENDANTS.';
                $org_list = array_unique(array_merge($user->orgs, $instance->m_orgs->get_user_descendants($user->id)));
                $org_list = array_unique(array_merge($org_list, $instance->m_orgs->get_user_ascendants($user->id)));
                $org_list[] = 1;
                $org_list = array_unique($org_list);
                break;

            default:
                $log->summary = 'Set org_list according to ' . $collection . ' for USER DEFAULT.';
                $org_list = $user->orgs;
                break;
        }
        $org_list = implode(',', $org_list);
        $log->detail = 'ORG LIST: ' . json_encode($org_list);
        stdlog($log);
        return $org_list;
    }
}

if ( ! function_exists('response_get_permission_ca')) {
    /**
     * Is the user allowed to perform $action on $collection according to their role membership
     * @param  class  $user          [description]
     * @param  string $collection    [description]
     * @param  string $action        [description]
     * @param  class  $received_data [description]
     * @param  int    $id            [description]
     * @return bool                  [description]
     */
    function response_get_permission_ca($user = null, $collection = '', $action = '', $received_data = null, $id = null)
    {
        $log = new stdClass();
        $log->severity = 7;
        $log->type = 'system';
        $log->object = 'response_helper';
        $log->function = 'response_helper::response_get_permission_ca';
        $log->status = 'parsing';
        $log->summary = '';

        $instance = & get_instance();
        $permissions = response_valid_permissions($collection);
        $log->detail = 'COLLECTION: ' . @$collection . ' ACTION: ' . @$action;

        if (empty($instance->roles) && intval($instance->config->config['internal_version']) >= 20160904) {
            return true;
        }

        if (empty($user->orgs)) {
            $instance->session->unset_userdata('user_id');
            $instance->session->set_flashdata('error', 'User has no permissions on any orgs.');
            redirect('logon');
        }

        if (empty($user) OR empty($collection) OR empty($action)) {
            $log->severity = 4;
            $log->details = 'Cannot retrieve permission, missing attribute';
            stdlog($log);
            return false;
        }

        if ($collection === 'users' && intval($user->id) === intval($id) && $action === 'read' ) {
            // Always allow a user to READ their own object
            return true;
        }
        if ($collection === 'help') {
            // Always allow a user to view help
            return true;
        }
        if ($collection === 'errors') {
            // Always allow a user to view help
            return true;
        }
        if ($collection === 'users' && $action === 'update' && $id === $user->id && ! empty($received_data)) {
            // A user is allowed to update some of their own fields
            $allowed_attributes = array('id', 'name', 'full_name', 'email', 'lang', 'password', 'dashboard_id');
            $check_permission = false;
            foreach (array_keys($received_data->attributes) as $key) {
                if ( ! in_array($key, $allowed_attributes)) {
                    $check_permission = true;
                }
            }
            if ($check_permission === false) {
                return true;
            }
        }
        // TODO - move the below into the function
        $perm_collection = $collection;
        if ($collection === 'baselines_policies') {
            $perm_collection = 'baselines';
        }
        if ( ! $instance->m_users->get_user_permission($user->id, $perm_collection, $permissions[$action]) and $instance->config->config['internal_version'] >= '20160904') {
            log_error('ERR-0015', $collection . ':' . $permissions[$action]);
            $log->details = 'User not permitted to perform ' . $action . ' on ' . $collection;
            $log->severity = 5;
            stdlog($log);
            return false;
        }
        $log->summary = 'User permitted to perform ' . $action . ' on ' . $collection;
        stdlog($log);
        return true;
    }
}

if ( ! function_exists('response_get_permission_id')) {
    /**
     * [response_get_permission_id description]
     * @param  [type] $user          [description]
     * @param  string $collection    [description]
     * @param  string $action        [description]
     * @param  [type] $received_data [description]
     * @param  [type] $id            [description]
     * @return [type]                [description]
     */
    function response_get_permission_id($user, $collection, $action, $received_data, $id)
    {
        $log = new stdClass();
        $log->severity = 7;
        $log->type = 'system';
        $log->object = 'response_helper';
        $log->function = 'response_helper::response_get_permission_id';
        $log->status = 'parsing';
        $log->summary = '';

        $instance = & get_instance();
        $log->detail = 'COLLECTION: ' . @$collection . ' ACTION: ' . @$action . ' ID: ' . @$id;
        $collections = array('charts', 'configuration', 'database', 'errors', 'ldap_servers', 'logs', 'nmis', 'queue', 'report', 'roles');

        if ( empty($id) OR intval($id) === 888888888888 OR in_array($collection, $collections)) {
            $log->summary = 'User permitted to access ' . $collection;
            stdlog($log);
            return true;
        }

        if ( ! $instance->m_users->get_user_collection_org_permission($collection, $id)) {
            log_error('ERR-0018', $collection . ':' . $action);
            $log->severity = 5;
            $log->summary = 'User not permitted to perform ' . $action . ' on ' . $collection . ' ID ' . $id;
            stdlog($log);
            return false;
        }
        // check (if we're supplying data) that the OrgID is one we are allowed to supply
        if ($action === 'create' OR $action === 'update' OR $action === 'import' OR $action === 'delete') {
            $temp = explode(',', $user->org_list);
            // org_id
            if ( ! empty($received_data->org_id)) {
                $allowed = false;
                foreach ($temp as $key => $value) {
                    if ($received_data->org_id === $value) {
                        $allowed = true;
                    }
                }
                if ( ! $allowed) {
                    log_error('ERR-0018', $collection . ':' . $action);
                    $log->severity = 5;
                    $log->summary = 'User not permitted to perform ' . $action . ' on ' . $collection . ' ID ' . $id;
                    stdlog($log);
                    return false;
                }
            }
            // devices_assigned_to_org
            if ( ! empty($received_data->devices_assigned_to_org)) {
                $allowed = false;
                foreach ($temp as $key => $value) {
                    if ($received_data->devices_assigned_to_org === $value) {
                        $allowed = true;
                    }
                }
                if ( ! $allowed) {
                    log_error('ERR-0018', $collection . ':' . $action);
                    $log->severity = 5;
                    $log->summary = 'User not permitted to perform ' . $action . ' on ' . $collection . ' ID ' . $id;
                    stdlog($log);
                    return false;
                }
            }
            $log->summary = 'User permitted to perform ' . $action . ' on OrgID ' . @$received_data->org_id;
        }
        stdlog($log);
        return true;
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
    function response_get_properties($collection = '', $action = '', $sub_resource = '', $get = '', $post = '')
    {
        $log = new stdClass();
        $log->severity = 7;
        $log->type = 'system';
        $log->object = 'response_helper';
        $log->function = 'response_helper::response_get_properties';
        $log->status = 'parsing';
        $log->summary = '';

        $instance = & get_instance();
        $properties = '';

        if ($sub_resource === 'devices') {
            $sub_resource = 'system';
        }

        $table = $collection;
        if ($table === 'devices') {
            $table = 'system';
        }

        if ( ! empty($get)) {
            $properties = $get;
            $log->summary = 'Set properties according to GET.';
            // Allow for format of properties=["id", "name", "status"]
            if ($temp = json_decode($properties)) {
                $properties = implode(',', $temp);
                $log->summary = 'Set properties according to GET JSON.';
            }
        }
        if ( ! empty($post)) {
            $properties = $post;
            $log->summary = 'Set properties according to POST.';
            // Allow for format of properties=["id", "name", "status"]
            if ($temp = json_decode($properties)) {
                $properties = implode(',', $temp);
                $log->summary = 'Set properties according to POST JSON.';
            }
        }
        if ($collection === 'devices') {
            if ($action === 'collection' && ($properties === 'default' OR $properties === '') && ($sub_resource === '' OR $sub_resource === 'system')) {
                if ($properties === 'default') {
                    $log->summary = 'Set properties to config DEFAULT.';
                    $properties = $instance->config->config['devices_default_retrieve_columns'];
                } else {
                    $log->summary = 'Set properties because BLANK.';
                    $properties = 'system.id,system.icon,system.type,system.name,system.domain,system.ip,system.identification,system.description,system.manufacturer,system.os_family,system.status';
                }
            } else if ($action === 'collection' && $sub_resource !== '') {
                $log->summary = 'Set properties to ALL.';
                $properties = $sub_resource . '.*';
            }
        }
        if ($properties === 'all' OR $properties === '*') {
            $properties = $table . '.' . implode(','.$table.'.', $instance->db->list_fields($table));
            $log->summary = 'Set properties to TABLE ALL.';
        }

        if ( ! empty($properties) and $properties !== $sub_resource . '.*') {
            // Validate the properties are database columns
            $properties = explode(',', $properties);
            for ($i=0; $i < count($properties); $i++) {
                if (strpos($properties[$i], '.') !== false) {
                    $temp = explode('.', $properties[$i]);
                    if ( ! $instance->db->table_exists($temp[0])) {
                        $log->detail = 'Invalid property supplied (' . htmlentities(mysqli_real_escape_string($instance->db->conn_id, $properties[$i])) . '), removed.';
                        unset($properties[$i]);
                        stdlog($log);
                    } else if ( ! $instance->db->field_exists($temp[1], $temp[0])) {
                        $log->detail = 'Invalid property supplied (' . htmlentities(mysqli_real_escape_string($instance->db->conn_id, $properties[$i])) . '), removed.';
                        unset($properties[$i]);
                        stdlog($log);
                    }
                } else {
                    if ( ! $instance->db->table_exists($table)) {
                        $log->detail = 'Invalid property supplied (' . htmlentities(mysqli_real_escape_string($instance->db->conn_id, $properties[$i])) . '), removed.';
                        unset($properties[$i]);
                        stdlog($log);
                    } else if ( ! $instance->db->field_exists($properties[$i], $table)) {
                        $log->detail = 'Invalid property supplied (' . htmlentities(mysqli_real_escape_string($instance->db->conn_id, $properties[$i])) . '), removed.';
                        unset($properties[$i]);
                        stdlog($log);
                    }
                }
            }
            $properties = implode(',', $properties);
        }

        if ($properties === '' && $collection !== 'devices') {
            $properties = '.*';
            $log->summary = 'Set properties according to NON-DEVICES DEFAULT.';
        }
        // perform some simple data cleansing
        if (is_array($properties)) {
            $properties = implode(',', $properties);
        }
        $temp = $properties;
        // ONLY allow letters, numbers, dot, underscore, command and *.
        $properties = preg_replace('/[^A-Za-z0-9\.\_\,\*]/', '', $properties);
        if ($temp !== $properties) {
            // something was filtered
            $log->summary = 'Set properties according to FILTERING.';
        }
        if ( ! empty($properties)) {
            $log->detail = 'PROPERTIES: ' . $properties;
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
    function response_get_sort($collection = '', $get = '', $post = '')
    {
        $log = new stdClass();
        $log->severity = 7;
        $log->type = 'system';
        $log->object = 'response_helper';
        $log->function = 'response_helper::response_get_sort';
        $log->status = 'parsing';
        $log->summary = '';

        $instance = & get_instance();
        $sort = '';

        if ( ! empty($get)) {
            $sort = $get;
            $log->summary = 'Set sort according to GET.';
        }
        if (! empty($post)) {
            $sort = $post;
            $log->summary = 'Set sort according to POST.';
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
                    $log->summary = 'Invalid sort attribute supplied (' . htmlentities($properties[$i]) . '), removed.';
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
            $log->detail = 'SORT: ' . $sort;
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
    function response_get_sub_resource($get = '', $post = '', $uri = '', $collection = '', $format = '')
    {
        $log = new stdClass();
        $log->severity = 7;
        $log->type = 'system';
        $log->object = 'response_helper';
        $log->function = 'response_helper::response_get_sub_resource';
        $log->status = 'parsing';
        $log->summary = '';

        $sub_resource = '';

        if ( ! empty($get)) {
            $sub_resource = $get;
            $log->summary = 'Set sub_resource according to GET.';
        }
        if ( ! empty($post)) {
            $sub_resource = $post;
            $log->summary = 'Set sub_resource according to POST.';
        }
        if ( ! empty($uri)) {
            $sub_resource = $uri;
            $log->summary = 'Set sub_resource according to URI.';
        }
        if ( ! empty($sub_resource) && $collection === 'devices') {
            $valid_sub_resources = response_valid_sub_resources();
            if ($format === 'screen' && (empty($sub_resource) OR $sub_resource === '*' OR $sub_resource === 'all')) {
                $sub_resource = implode(',', $valid_sub_resources);
            } else {
                $temp = explode(',', $sub_resource);
                for ($i=0; $i < count($temp); $i++) {
                    if ( ! in_array($temp[$i], $valid_sub_resources)) {
                        unset($temp[$i]);
                    }
                }
                $sub_resource = implode(',', $temp);
            }
        }
        if ( ! empty($sub_resource)) {
            $log->detail = 'SUB_RESOURCE: ' . $sub_resource;
            stdlog($log);
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
    function response_get_sub_resource_id($uri = '', $get = '', $post = '')
    {
        $log = new stdClass();
        $log->severity = 7;
        $log->type = 'system';
        $log->object = 'response_helper';
        $log->function = 'response_helper::response_get_sub_resource_id';
        $log->status = 'parsing';
        $log->summary = '';

        $sub_resource_id = '';

        if ( ! empty($uri)) {
            $sub_resource_id = intval((string)urldecode($uri));
            $log->summary = 'Set sub_resource_id according to URI.';
        }
        if ( ! empty($get)) {
            $sub_resource_id = intval($get);
            $log->summary = 'Set sub_resource_id according to GET.';
        }
        if ( ! empty($post)) {
            $sub_resource_id = intval($post);
            $log->summary = 'Set sub_resource_id according to POST.';
        }
        if ( ! empty($sub_resource_id)) {
            $log->detail = 'SUB_RESOURCE_ID: ' . $sub_resource_id;
            stdlog($log);
        }
        return $sub_resource_id;
    }
}

if ( ! function_exists('response_get_version')) {
    /**
     * Determine if the user specifically requested an API version. If so, adjust the URI.
     * @return int The version number, defaults to 1
     */
    function response_get_version($uri_segments = null, $accept_header = '')
    {
        // FUNCTION NOT USED
        // Only version 1 is available
        return 1;

        $log = new stdClass();
        $log->severity = 7;
        $log->type = 'system';
        $log->object = 'response_helper';
        $log->function = 'response_helper::response_get_version';
        $log->status = 'parsing';
        $log->summary = '';

        $instance = & get_instance();
        $version = 1;

        if (empty($uri_segments) or ! is_array($uri_segments)) {
            $log->summary = 'Bad segments array passed to function';
            stdlog($log);
            return 1;
        }

        if ( ! empty($uri_segments[1]) && ($uri_segments[1] === 'api' OR $uri_segments[1] === 'v1' OR $uri_segments[1] === 'v2')) {
            if ($uri_segments[1] === 'api') {
                $version = intval($instance->uri->segment(2));
                $log->summary = 'Set version according to URI api segment.';
            } else if ($uri_segments[1] === 'v1') {
                $version = 1;
                $log->summary = 'Set version according to URI v1 segment.';

            } else if ($uri_segments[1] === 'v2') {
                $version = 2;
                $log->summary = 'Set version according to URI v2 segment.';
            }
        } else if (strpos($accept_header, 'application/json;version=') !== false) {
            $version = intval(str_replace('application/json;version=', '', $accept_header));
            $log->summary = 'Set version according to headers.';
        }
        if ($version !== 1 && $version !== 2) {
            $version = 1;
        }
        $log->detail = 'VERSION: ' . $version;
        stdlog($log);
        return $version;
    }
}

if ( ! function_exists('response_set_uri')) {
    /**
     * Determine if the user specifically requested a version. If so, adjust the URI.
     * @return array The URI after removing any API version items
     */
    function response_set_uri($uri_segments = null)
    {
        if ( ! empty($uri_segments[1]) && is_array($uri_segments) && ($uri_segments[1] === 'api' OR $uri_segments[1] === 'v1' OR $uri_segments[1] === 'v2')) {
            if ($uri_segments[1] === 'api') {
                unset($uri_segments[1]);
                unset($uri_segments[2]);
            } else if ($uri_segments[1] === 'v1') {
                unset($uri_segments[1]);
            } else if ($uri_segments[1] === 'v2') {
                unset($uri_segments[1]);
            }
        }
        array_unshift($uri_segments, '');
        $filtered_segments = array_values($uri_segments);
        return $filtered_segments;
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
        return array('agents','applications','attributes','baselines','baselines_policies','buildings','chart','clouds','clusters','collectors','configuration','connections','credentials','dashboards','database','devices','discoveries','discovery_log','discovery_scan_options','errors','fields','files','floors','groups','help','integrations','ldap_servers','licenses','locations','logs','networks','nmis','orgs','queries','queue','racks','rack_devices','reports','roles','rooms','rows','rules','scripts','search','sessions','summaries','tasks','users','widgets');
    }
}

if ( ! function_exists('response_valid_current')) {
    /**
     * An array of valid current
     * @return array
     */
    function response_valid_current()
    {
        return array('y','n','all','delta','full');
    }
}

if ( ! function_exists('response_valid_formats')) {
    /**
     * An array of valid response formats
     * @return array
     */
    function response_valid_formats()
    {
        $valid_formats = array('json','json_data','highcharts','html','screen','xml','csv','sql','table');
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
        return array('application', 'attachment', 'audit_log', 'bios', 'change_log', 'cluster', 'credential', 'discovery_log', 'disk', 'dns', 'edit_log', 'field', 'file', 'image', 'ip', 'location', 'log', 'memory', 'module', 'monitor', 'motherboard', 'netstat', 'network', 'nmap', 'optical', 'pagefile', 'partition', 'policy', 'print_queue', 'processor', 'purchase', 'rack_devices', 'radio', 'route', 'san', 'scsi', 'server', 'server_item', 'service', 'share', 'software', 'software_key', 'sound', 'task', 'user', 'user_group', 'variable', 'video', 'vm', 'windows');
    }
}

if ( ! function_exists('response_valid_permissions')) {
    /**
     * Set permissions array. Execute depends on $collection
     * @param  string $collection Execute depends on $collection
     * @return array              The array.
     */
    function response_valid_permissions($collection)
    {
        $permission = array();
        $permission['bulk_update_form'] = 'c';
        $permission['collection'] = 'r';
        $permission['create'] = 'c';
        $permission['create_form'] = 'c';
        $permission['delete'] = 'd';
        $permission['download'] = 'r';
        if ($collection === 'database' OR $collection === 'discoveries') {
            $permission['execute'] = 'u';
        } else {
            $permission['execute'] = 'r';
        }
        $permission['import'] = 'c';
        $permission['import_form'] = 'c';
        $permission['read'] = 'r';
        $permission['export'] = 'r';
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
        return $permission;
    }
}

if ( ! function_exists('response_valid_sub_resources')) {
    /**
     * An array of valid sub_resources (for devices)
     * @return array
     */
    function response_valid_sub_resources()
    {
        return array('application', 'attachment', 'audit_log', 'bios', 'change_log', 'cluster', 'credential', 'discovery', 'discovery_log', 'disk', 'dns', 'edit_log', 'field', 'image', 'ip', 'log', 'memory', 'module', 'monitor', 'motherboard', 'netstat', 'network', 'nmap', 'optical', 'pagefile', 'partition', 'partition_graph', 'policy', 'print_queue', 'processor', 'radio', 'route', 'server', 'server_item', 'service', 'share', 'software', 'software_key', 'sound', 'task', 'user', 'user_group', 'variable', 'video', 'vm', 'windows', 'report', 'query', 'group');
    }
}

if ( ! function_exists('valid_reserved_words')) {
    /**
     * An array of valid URL reserved words
     * @return array
     */
    function response_valid_reserved_words()
    {
        return array('action', 'as_at', 'current', 'debug', 'format', 'graph', 'groupby', 'ids', 'include', 'limit', 'offset', 'properties', 'query', 'report_name', 'search', 'sort', 'sub_resource', 'sub_resource_id');
    }
}
// End of file response_helper.php
// Location: ./helpers/response_helper.php
