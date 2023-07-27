<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

if (!function_exists('response_create')) {
    function response_create($instance = null)
    {
        error_reporting(E_ALL);
        $request = \Config\Services::request();
        $uri = $request->getUri();
        $uri->setSilent();

        // Define our constants for use in htmlspecialchars
        if (!defined('CHARSET')) {
            define('CHARSET', 'UTF-8');
            define('REPLACE_FLAGS', ENT_COMPAT | ENT_XHTML);
        }

        // make sure we have the required header
        if (empty($_SERVER['HTTP_ACCEPT'])) {
            $_SERVER['HTTP_ACCEPT'] = '';
        }

        // enable the $_GET global
        // if (!is_cli()) {
        //     parse_str(substr(strrchr($_SERVER['REQUEST_URI'], '?'), 1), $_GET);
        // }

        $response = new \StdClass();
        $response->meta = new \StdClass();
        $response->meta->action = strtolower($instance->method);
        $response->meta->collection = str_replace('\\app\\controllers\\', '', strtolower($instance->controller));
        $response->meta->request_method = strtoupper(\Config\Services::request()->getMethod());

        // no dependencies - set in GET or POST or HEADERS or CLI
        $get_format = $request->getGet('format');
        if ($response->meta->request_method === 'CLI') {
            // Check if we've been passed a format on the CLI
            foreach ($uri->getPath() as $segment) {
                if (strpos($segment, 'format=') !== false) {
                    $get_format = str_replace('format=', '', $segment);
                }
            }
            // Set format to JSON if nothing or invalid format passed
            if ($get_format !== 'json' and $get_format !== 'highcharts' and $get_format !== 'csv') {
                $get_format = 'json';
            }
        }
        $response->meta->format = response_get_format(
            $get_format,
            $request->getPost('format'),
            $request->header('Accept')
        );

        if ($response->meta->collection === 'collections') {
            $response->meta->collection = strtolower(html_entity_decode(urldecode($uri->getSegment(1))));
            if (empty($response->meta->collection)) {
                $response->meta->collection = (!empty(config('OpenAudit')->homepage)) ? config('OpenAudit')->homepage : 'orgs';
            }
        }
        $valid_collections = response_valid_collections();
        if (!in_array($response->meta->collection, $valid_collections)) {
            log_message('error', 'Invalid collection supplied (' . $response->meta->collection . '), removing.');
            $response->meta->collection = '';
        }
        $response->meta->id = null;

        # We have what the user is trying to do and to what (if any) item - check permissions
        $permission_requested = response_valid_permissions($response->meta->collection);

        if (strpos($instance->user->permissions[$response->meta->collection], $permission_requested[$response->meta->action]) === false) {
            $message = 'User ' . $instance->user->full_name . ' requested to perform ' . $response->meta->action . ' on ' . $response->meta->collection . ', but has no permission to do so.';
            $response->errors = array();
            $response->errors[] = $message;
            $response->meta->header = 403;
            log_message('warning', $message);
            if ($response->meta->format === 'json') {
                $instance->response->setStatusCode($response->meta->header);
                echo json_encode($response);
                exit();
            } else {
                \Config\Services::session()->setFlashdata('error', $message);
                header('Location: '.base_url());
                exit();
            }
        } else {
            log_message('debug', 'User ' . $instance->user->full_name . ' requested to perform ' . $response->meta->action . ' on ' . $response->meta->collection . ', and has permission to do so.');
        }
        $instance->user->org_list = response_get_org_list($instance, $response->meta->collection);
        $response->meta->permission_requested = $permission_requested;



        $response->links = new \StdClass();
        $response->included = array();
        $response->logs = array();

        $response->meta->access_token = @$instance->user->access_token;
        $response->meta->baseurl = base_url();
        if ($response->meta->collection === 'components') {
            $response->meta->current = 'y';
        }
        $response->meta->debug = false;
        $response->meta->filtered = '';
        $response->meta->groupby = '';
        $response->meta->header = 200;
        // $response->meta->ids = null; // Only set below if it contains data
        $response->meta->include = '';
        $response->meta->limit = '';
        $response->meta->microtime = config('OpenAudit')->microtime;
        $response->meta->offset = 0;
        $response->meta->properties = '';
        // NOTE see response_get_query_filter for why we do the below with the query string
        $response->meta->query_string = urldecode($_SERVER['QUERY_STRING']);
        $response->meta->query_string = str_replace('&amp;', '&', $response->meta->query_string);
        if (is_cli()) {
            $response->meta->request_method = 'CLI';
        }
        $response->meta->requestor = '';
        if (!empty($_SERVER['HTTP_REQUESTOR'])) {
            $response->meta->requestor = (string)$_SERVER['HTTP_REQUESTOR'];
        }
        $response->meta->server_app_version = config('Openaudit')->display_version;
        $response->meta->server_platform = php_uname('s');
        if ($response->meta->server_platform === 'Windows NT') {
            $command = 'wmic os get name';
            exec($command, $output);
            if (!empty($output[1])) {
                $os = explode('|', $output[1]);
                $response->meta->server_platform = $os[0];
            }
        } else {
            $command = 'cat /etc/os-release 2>/dev/null | grep -i ^PRETTY_NAME | cut -d= -f2 | cut -d\" -f2';
            exec($command, $output);
            if (!empty($output[0])) {
                $response->meta->server_platform = $output[0];
            }
        }

        $response->meta->sort = '';
        // $response->meta->sub_resource = '';
        // $response->meta->sub_resource_id = 0; // Only set below if it contains data
        if (!empty($GLOBALS['timer_start'])) {
            $response->meta->time_start = $GLOBALS['timer_start'];
        } else {
            $response->meta->time_start = microtime(true);
        }
        $response->meta->time_end = 0;
        $response->meta->time_elapsed = 0;
        $response->meta->total = 0;
        $response->meta->timestamp = config('OpenAudit')->timestamp;
        $response->meta->timezone = config('OpenAudit')->timezone;
        $response->meta->version = 1;
        $response->meta->filter = array();
        $response->meta->received_data = array();
        $response->meta->sql = array();
        $response->meta->user = $instance->user->name;

        // no dependencies - set in GET or POST
        $response->meta->debug = response_get_debug(
            $request->getGet('debug'),
            $request->getPost('debug'),
            $request->header('debug')
        );

        // Set the heading based on the collection
        $response->meta->heading = ucfirst($response->meta->collection);

        // depends on collection - set in URI or POST
        $response->meta->id = response_get_id(
            html_entity_decode(urldecode($uri->getSegment(2))),
            $response->meta->collection,
            $instance->user->org_list
        );

        // no dependencies - set in GET or POST
        $temp = response_get_ids($request->getGet('ids'), $request->getPost('ids'));
        // Only set if not empty
        if (!empty($temp)) {
            $response->meta->ids = $temp;
        }

        // no dependencies - set in PATCH or POST, can set ID
        $response->meta->received_data = response_get_data($response->meta->request_method);

        if (!empty($response->meta->received_data->id)) {
            if ($response->meta->collection !== 'database' && $response->meta->collection !== 'configuration' and $response->meta->received_data->id !== 'dictionary') {
                $response->meta->id = intval($response->meta->received_data->id);
            }
        }

        // depends on version affecting URI, collection and format
        $response->meta->sub_resource = response_get_sub_resource(
            $request->getGet('sub_resource'),
            $request->getPost('sub_resource'),
            $uri->getSegment(3),
            $response->meta->collection,
            $response->meta->format
        );

        // depends on version affecting URI
        $temp = response_get_sub_resource_id(
            intval($uri->getSegment(4)),
            $request->getGet('id'),
            $request->getPost('id')
        );
        if (!empty($temp)) {
            $response->meta->sub_resource_id = intval($temp);
        }

        $temp = $request->getGet('sub_resource_id');
        if (!empty($temp)) {
            $response->meta->sub_resource_id = intval($request->getGet('sub_resource_id'));
        }

        // If we're creating data (POST), we should have an access token (configuration depending)
        if (!empty($response->meta->received_data)) {
            $session = \Config\Services::session();
            if ($response->meta->request_method === 'POST' && !empty(config('OpenAudit')->access_token_enable) && config('OpenAudit')->access_token_enable === 'y') {
                $response->errors = array();
                if (empty($response->meta->received_data->access_token)) {
                    $message = 'No access token provided when creating ' . $response->meta->collection . ', refresh the form and try again.';
                    log_message('error', $message);
                    $response->errors[] = $message;
                    $response->meta->header = 400;
                    if ($response->meta->format !== 'screen') {
                        $instance->response->setStatusCode($response->meta->header);
                        $instance->resp = $response;
                        output($instance);
                        exit();
                    } else {
                        \Config\Services::session()->setFlashdata('error', $message);
                        header('Location: ' . url_to($response->meta->collection.'Collection'));
                        exit();
                    }
                # } else if (!in_array($response->meta->received_data->access_token, $instance->user->access_token)) {
                } else if (!in_array($response->meta->received_data->access_token, $session->get('access_token'))) {
                    $message = 'An invalid access token was provided when creating ' . $response->meta->collection . ', refresh the form and try again.';
                    log_message('error', $message);
                    $response->errors[] = $message;
                    $response->meta->header = 400;
                    if ($response->meta->format !== 'screen') {
                        $instance->response->setStatusCode($response->meta->header);
                        $instance->resp = $response;
                        output($instance);
                        exit();
                    } else {
                        \Config\Services::session()->setFlashdata('error', $message);
                        header('Location: ' . url_to($response->meta->collection.'Collection'));
                        exit();
                    }
                }
            }
        }

        // depends on action
        if ($response->meta->action === 'create' or $response->meta->action === 'import') {
            $response->meta->header = 201;
        }

        // depends on collection and format
        $response->meta->include = response_get_include(
            $request->getGet('include'),
            $request->getPost('include'),
            $response->meta->collection,
            $response->meta->format
        );

        // depends on version affecting URI, collection
        $response->meta->sort = response_get_sort(
            $response->meta->collection,
            $request->getGet('sort'),
            $request->getPost('sort')
        );

        // depends on version affecting URI, collection
        $response->meta->groupby = response_get_groupby(
            $request->getGet('groupby'),
            $request->getPost('groupby'),
            $response->meta->collection
        );

        // no dependencies - set in GET or POST
        $response->meta->offset = response_get_offset($request->getGet('offset'), $request->getPost('offset'));

        // depends on format - set in GET or POST
        $response->meta->limit = response_get_limit(
            $request->getGet('limit'),
            $request->getPost('limit'),
            $response->meta->format,
            config('OpenAudit')->page_size
        );

        // depends on collection
        $response->meta->properties = response_get_properties(
            $response->meta->collection,
            $response->meta->action,
            $response->meta->sub_resource,
            $request->getGet('properties'),
            $request->getPost('properties')
        );

        $response->meta->properties = explode(',', $response->meta->properties);
        if ($response->meta->properties[0] !== $response->meta->collection . '.*' and !in_array($response->meta->collection . '.id', $response->meta->properties)) {
            $response->meta->properties[] = $response->meta->collection . '.id';
        }
        $response->meta->properties = implode(',', $response->meta->properties);

        $response->meta->properties = explode(',', $response->meta->properties);

        // depends on query string
        $response->meta->filter = response_get_query_filter($response->meta->query_string, 'filter');

        // Do we need to add All the Orgs?
        $test = true;
        foreach ($response->meta->filter as $filter) {
            if ($response->meta->collection === 'orgs' and ($filter->name === 'id' or $filter->name === 'orgs.id')) {
                $test = false;
            }
        }

        if ($test and !in_array($response->meta->collection, ['configuration', 'database', 'discovery_log', 'errors', 'help', 'nmis', 'roles', 'san', 'test', 'util'])) {
            $item = new \StdClass();
            $item->name = 'orgs.id';
            if ($response->meta->collection !== 'orgs') {
                $item->name = $response->meta->collection . '.' . 'org_id';
            }
            $item->function = 'whereIn';
            $item->operator = 'in';
            if (is_string($instance->user->org_list)) {
                $item->value = explode(',', $instance->user->org_list);
            } else {
                $item->value = $instance->user->org_list;
            }
            $response->meta->filter[] = $item;
        }

        if ($response->meta->collection === 'components' and $response->meta->action === 'delete') {
            foreach ($response->meta->filter as $filter) {
                if ($filter->name === 'components.type') {
                    $item = new \stdClass();
                    $item->component_type = $filter->value;
                    $response->meta->received_data[] = $item;
                    unset($item);
                }
            }
        }

        $collection = $response->meta->collection;
        if ($collection === 'components' and $response->meta->action !== 'create' and $response->meta->action !== 'delete') {
            if (!empty($response->meta->filter)) {
                foreach ($response->meta->filter as $fitler) {
                    if (!empty($filter->name) and $filter->name === 'components.type') {
                        $collection = $filter->value;
                    }
                }
            }
        }

        $permission = response_get_permission_id($instance->user, $collection, $response->meta->action, $response->meta->received_data, $response->meta->id);

        if (!$permission) {
            $message = 'User permission denied for ' . $response->meta->collection . ' to perform ' . $response->meta->action . ' on item because of OrgID.';
            log_message('warning', $message);
            $response->meta->header = 403;
            $response->errors = array();
            $response->errors[] = $message;
            if ($response->meta->format !== 'screen') {
                $instance->response->setStatusCode($response->meta->header);
                $instance->resp = $response;
                output($instance);
                exit();
            } else {
                \Config\Services::session()->setFlashdata('error', $message);
                header('Location: ' . url_to($response->meta->collection.'Collection'));
                exit();
            }
        }
        if (!empty($instance->response->logs)) {
            $response->logs = $instance->response->logs;
        }
        return $response;
    }
}

if (!function_exists('response_get_data')) {
    /**
     * Parse $_POST and $_PATCH for sent data
     * @param  string $request_method How we got this data
     * @return array The received data
     */
    function response_get_data($request_method = '')
    {
        $data_supplied_by = '';
        $received_data = array();

        if ($request_method === 'POST') {
            if (!empty($_POST['data']) && is_array($_POST['data'])) {
                $summary = 'Set received data according to POST (form).';
                $received_data = $_POST['data'];
                $received_data = json_encode($received_data);
                $received_data = json_decode($received_data);
                $data_supplied_by = 'form';
                if (!empty($received_data->json) and is_string($received_data->json)) {
                    $received_data->json = json_decode($received_data->json);
                }
            } else if (!empty($_POST['data'])) {
                $summary = 'Set received data according to POST (json).';
                // This is straight JSON submitted data in a string
                $received_data = @json_decode($_POST['data']);
                $data_supplied_by = 'json';
            }
        }
        if ($request_method === 'PATCH') {
            $data_json = urldecode(str_replace('data=', '', file_get_contents('php://input')));
            $data_object = json_decode($data_json);
            $options = @$data_object->data->attributes->options;
            if (empty($data_object)) {
                // do nothing
            } else {
                $summary = 'Set received data according to PATCH.';
                $received_data = new \StdClass();
                if (!empty($data_object->data)) {
                    $received_data = $data_object->data;
                } else {
                    $received_data = $data_object;
                }
                if (!empty($options)) {
                    $received_data->attributes->options = $options;
                }
            }
        }
        if (!empty($received_data)) {
            log_message('debug', $summary);
        }
        return $received_data;
    }
}

function response_get_debug($get = '', $post = '', $header = '')
{
    # We cannot change the threshold after creation.
    # Leaving the below, but it won't have much effect.
    $debug = false;
    if (!empty($get) && strtolower($get) === 'true') {
        $summary = 'Set debug TRUE according to GET.';
        #config('Openaudit')->log_level = 9;
        #config('Logger')->threshold = 9;
        $debug = true;
    }
    if (!empty($post) && strtolower($post) === 'true') {
        $summary = 'Set debug TRUE according to POST.';
        #config('Openaudit')->log_level = 9;
        #config('Logger')->threshold = 9;
        $debug = true;
    }
    if (!empty($header) && strtolower($header) === 'true') {
        $summary = 'Set debug TRUE according to HEADER.';
        #config('Openaudit')->log_level = 9;
        #config('Logger')->threshold = 9;
        $debug = true;
    }
    if ($debug) {
        log_message('debug', $summary);
    }
    return $debug;
}

if (!function_exists('response_get_query_filter')) {
    /**
     * [response_get_filter description]
     * @param  [type] $query_string [description]
     * @return [type]               [description]
     */
    function response_get_query_filter($query_string, $type = '')
    {
        $instance = & get_instance();
        $reserved_words = response_valid_reserved_words();
        $filter = array();

        $db = db_connect();

        // NOTE - Had to create our own parsing routine because PHP replaces .'s with underscores
        //        in incoming variable names. The unfortunate result is that we can not use a . in
        //        a variable value when using GET (so no ?devices.manufacturer=Dell, for example)
        //        PHP Bug Report - https://bugs.php.net/bug.php?id=45272
        //        PHP Docs - https://php.net/manual/en/language.variables.external.php

        if (empty($query_string)) {
            return array();
        }

        if (!empty($query_string)) {
            foreach (explode('&', $query_string) as $item) {
                $query = new \StdClass();
                $query->name = substr($item, 0, strpos($item, '='));
                $query->name = preg_replace('/[^A-Za-z0-9\.\_]/', '', $query->name);
                $query->function = 'where';
                $query->operator = '';
                $query->value = str_replace($query->name.'=', '', $item);

                if (strtolower(substr($query->value, 0, 8)) === 'not like') {
                    $query->value = substr($query->value, 8);
                    $query->function = 'notLike';
                    $query->operator = 'not like';
                }

                if (strtolower(substr($query->value, 0, 5)) === '!like') {
                    $query->value = substr($query->value, 5);
                    $query->function = 'notLike';
                    $query->operator = 'not like';
                }

                $operator = substr($query->value, 0, 4);
                if (strtolower($operator) === 'like') {
                    $query->value = substr($query->value, 4);
                    $query->function = 'like';
                    $query->operator = $operator;
                }

                $operator = substr($query->value, 0, 2);
                if ($operator === '!=' or $operator === '>=' or $operator === '<=') {
                    $query->value = substr($query->value, 2);
                    $query->function = 'where';
                    $query->operator = $operator;
                }

                $operator = substr($query->value, 0, 1);
                if ($operator === '=' or $operator === '>' or $operator === '<') {
                    $query->value = substr($query->value, 1);
                    $query->function = 'where';
                    $query->operator = $operator;
                }

                if (empty($query->operator)) {
                    $query->function = 'where';
                    $query->operator = '=';
                }

                if (substr($query->value, 0, 3) === 'in(' && strpos($query->value, ')') === strlen($query->value)-1) {
                    $query->value = substr($query->value, 2);
                    $query->function = 'whereIn';
                    $query->operator = 'in';
                    $values = explode(',', trim($query->value, '()'));
                    $query->value = array();
                    foreach ($values as $key => $value) {
                        $values[$key] = trim($values[$key], '"\'');
                        if (($query->name === 'ip' or stripos($query->name, '.ip') !== false) and filter_var($values[$key], FILTER_VALIDATE_IP)) {
                            $values[$key] = ip_address_to_db($values[$key]);
                        }
                        if (is_numeric($values[$key])) {
                            $values[$key] = intval($values[$key]);
                        }
                        $query->value[] = $values[$key];
                    }
                }

                if (is_string($query->value) and substr($query->value, 0, 6) === 'notin(' && strpos($query->value, ')') === strlen($query->value)-1) {
                    $query->value = substr($query->value, 2);
                    $query->function = 'whereIn';
                    $query->operator = 'in';
                    $values = explode(',', trim($query->value, '()'));
                    foreach ($values as $key => $value) {
                        $values[$key] = trim($values[$key], '"\'');
                        if (($query->name === 'ip' or stripos($query->name, '.ip') !== false) and filter_var($values[$key], FILTER_VALIDATE_IP)) {
                            $values[$key] = ip_address_to_db($values[$key]);
                        }
                    }
                }

                // Accept first_seen, last_seen, edited_date and timestamp as numeric unix_timestamp's and convert them to a local timestamp string
                // TODO - what if we have one of these attributes and our value is in a LIKE array, ie, not a string
                $item = substr($query->name, strpos($query->name, '.')+1);
                if (($item === 'first_seen' or $item === 'last_seen' or $item === 'when' or $item === 'edited_date' or $item === 'timestamp') && is_numeric($query->value)) {
                    if ($query->operator === 'like' or $query->operator === 'not like') {
                        $query->value = str_replace('%', '', $query->value);
                    }
                    $query->value = from_unix_timestamp($query->value);
                    if ($query->operator === 'like' or $query->operator === 'not like') {
                        $query->value = '%' . $query->value . '%';
                    }
                }

                if (!empty($query->name) && ! in_array($query->name, $reserved_words) && $type === 'filter') {
                    $filter[] = $query;
                }

                if ($type === 'query') {
                    $filter[] = $query;
                }
            }
        }
        if (!empty($filter)) {
            log_message('debug', strtoupper($type) .': ' . json_encode($filter));
        }
        return $filter;
    }
}

if (!function_exists('response_get_format')) {
    /**
     * Return the response format derived from the HEADERS or URL (get) or BODY (post)
     * @return string The response format requested
     */
    function response_get_format($get = '', $post = '', $header = '')
    {
        $format = 'json';
        $summary = '';
        if (strpos((string)$header, 'application/json') !== false) {
            $format = 'json';
            $summary = "Set format according to HEADERS ($format).";
        }
        if (strpos((string)$header, 'html') !== false) {
            $format = 'screen';
            $summary = "Set format according to HEADERS ($format).";
        }
        if (!empty($get)) {
            $format = $get;
            $summary = "Set format according to GET ($get).";
        }
        if (!empty($post)) {
            $format = $post;
            $summary = "Set format according to POST ($post).";
        }
        $valid_formats = response_valid_formats();
        if (!in_array($format, $valid_formats)) {
            $summary = 'Set format to json, because unknown format: ' . $format;
            $format = 'json';
        }
        log_message('debug', $summary);
        return $format;
    }
}

if (!function_exists('response_get_groupby')) {
    /**
     * Determine and validate the requested groupby
     * @param  string $collection The request collection
     * @return string             The validated groupby
     */
    function response_get_groupby($get = '', $post = '', $collection = '')
    {
        $db = db_connect();
        $groupby = '';

        if (!empty($get)) {
            $groupby = $get;
            $summary = "Set groupby according to GET ($get).";
        }
        if (!empty($post)) {
            $groupby = $post;
            $summary = "Set groupby according to POST ($post).";
        }
        if ($groupby !== '') {
            log_message('debug', 'GroupBy: ' . $summary);
        }
        if (!empty($groupby)) {
            if (strpos($groupby, '.') !== false) {
                $temp = explode('.', $groupby);
                if (!$db->fieldExists($temp[1], $temp[0])) {
                    $groupby = '';
                    $summary = "Invalid groupby supplied ({$groupby}), removed.";
                    log_message('debug', 'GroupBy: ' . $summary);
                } else {
                    $groupby = $temp[0] . '.' . $temp[1];
                }
            } else {
                if (!$db->fieldExists($groupby, $temp)) {
                    $groupby = '';
                    $summary = "Invalid groupby supplied ({$groupby}), removed.";
                    log_message('debug', 'GroupBy: ' . $summary);
                } else {
                    $groupby = $temp . '.' . $groupby;
                }
            }
        }
        if ($groupby !== '') {
            log_message('debug', 'GroupBy: ' . $groupby);
        }
        return $groupby;
    }
}

if (!function_exists('response_get_id')) {
    /**
     * Determine if we are passed an ID or a name and return an integer ID
     * @param  string $id         [description]
     * @param  string $collection [description]
     * @param  string $org_list   [description]
     * @return int|null
     */
    function response_get_id($id = '', $collection = '', $org_list = '')
    {
        $db = db_connect();

        $instance = & get_instance();

        if (empty($id)) {
            // log_message('debug', 'No ID provided, returning NULL.');
            return null;
        }
        if (is_numeric($id)) {
            return intval($id);
        } else {
            $actions = response_valid_actions();
            $collections = response_valid_collections();
            $no_org_id = array('chart', 'components', 'configuration', 'database', 'errors', 'help', 'logs', 'nmis', 'reports', 'roles', 'search', 'sessions');
            if (!in_array($id, $actions)) {
                // Our 'id' is a string, but not an action - therefore it's a name
                if ($collection === 'database') {
                    $tables = $db->listTables();
                    if (!in_array($id, $tables)) {
                        log_message('warning', 'No ID to Name match in database.');
                        $id = null;
                    }
                    log_message('debug', "ID to Name match in database (Provided ID: $id).");
                } else if ($collection === 'configuration') {
                    // configuration
                    $sql = "SELECT id FROM `configuration` WHERE name = ? ORDER BY id DESC LIMIT 1";
                    $result = $db->query($sql, [$id])->getResult();
                    if (!empty($result)) {
                        log_message('debug', "ID to Name match in configuration (Provided ID: $id, Database ID: " . intval($result[0]->id) . ").");
                        $id = intval($result[0]->id);
                    } else {
                        log_message('warning', 'No ID to Name match in configuration.');
                        $id = null;
                    }
                } else if ($collection === 'devices') {
                    // devices
                    $sql = "SELECT id FROM devices WHERE name LIKE ? AND org_id IN ({$org_list}) ORDER BY id DESC LIMIT 1";
                    $result = $instance->db->query($sql, [$id])->getResult();
                    if (!empty($result)) {
                        log_message('debug', "ID to Name match in devices (Provided ID: $id, Database ID: " . intval($result[0]->id) . ").");
                        $id = intval($result[0]->id);
                    } else {
                        log_message('warning', 'No ID to Name match in devices.');
                        $id = null;
                    }
                } else if ($collection === 'users') {
                    // Special case the username as we may be given user.name@domain.com for LDAP user, but we only use user.name in users.name
                    $sql = "SELECT id FROM users WHERE name LIKE ? AND org_id IN ({$org_list}) ORDER BY id DESC LIMIT 1";
                    $temp = explode('@', $id);
                    $data = array($temp[0]);
                    unset($temp);
                    $result = $instance->db->query($sql, $data)->getResult();
                    if (!empty($result)) {
                        log_message('debug', "ID to Name match in users (Provided ID: $id, Database ID: " . intval($result[0]->id) . ").");
                        $id = intval($result[0]->id);
                    } else {
                        log_message('warning', 'No ID to Name match in users.');
                        $id = null;
                    }
                } else if ($collection === 'orgs') {
                    // orgs.id, not *.org_id
                    $sql = "SELECT id FROM orgs WHERE name LIKE ? AND id IN ({$org_list}) ORDER BY id DESC LIMIT 1";
                    $result = $instance->db->query($sql, [$id])->getResult();
                    if (!empty($result)) {
                        log_message('debug', "ID to Name match in orgs (Provided ID: $id, Database ID: " . intval($result[0]->id) . ").");
                        $id = intval($result[0]->id);
                    } else {
                        log_message('warning', 'No ID to Name match in orgs.');
                        $id = null;
                    }
                } else if ($collection === 'baselines_policies') {
                    // baselines_policies.baseline_id -> baselines.id -> baselines.org_id
                    $sql = "SELECT baselines_policies.id FROM baselines_policies LEFT JOIN baselines ON (baselines_policies.baseline_id = baselines.id) WHERE baselines_policies.name LIKE ? AND baselines.org_id IN ({$org_list}) ORDER BY id DESC LIMIT 1";
                    $result = $instance->db->query($sql, [$id])->getResult();
                    if (!empty($result)) {
                        log_message('debug', "ID to Name match in baselines_policies (Provided ID: $id, Database ID: " . intval($result[0]->id) . ").");
                        $id = intval($result[0]->id);
                    } else {
                        log_message('warning', 'No ID to Name match in baselines_policies.');
                        $id = null;
                    }
                } else if (in_array($collection, $no_org_id)) {
                    log_message('debug', 'No ID required for ' . $collection);
                    $id = 1;
                } else if (in_array($collection, $collections)) {
                    $sql = "SELECT id FROM {$collection} WHERE name LIKE ? AND org_id IN ({$org_list}) ORDER BY id DESC LIMIT 1";
                    $result = $instance->db->query($sql, [$id])->getResult();
                    if (!empty($result)) {
                        log_message('debug', "ID to Name match in $collection (Provided ID: $id, Database ID: " . intval($result[0]->id) . ").");
                        $id = intval($result[0]->id);
                    } else {
                        log_message('warning', "No ID to Name match in $collection.");
                        $id = null;
                    }
                }
                return $id;
            }
        }
    }
}


if (!function_exists('response_get_ids')) {
    /**
     * Determine the list of device IDs
     * @return string The comma separated list of device IDs
     */
    function response_get_ids($get = '', $post = '')
    {
        $device_ids = '';

        if (!empty($get)) {
            $device_ids = $get;
            log_message('debug', 'Set IDs according to GET (' . $get . ').');
        }
        if (!empty($post)) {
            $device_ids = $post;
            log_message('debug', 'Set IDs according to POST (' . $post . ').');
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
        }
        return $device_ids;
    }
}

if (!function_exists('response_get_include')) {
    /**
     * Determine the requested included sub-collections
     * @param  string $collection [description]
     * @param  string $format     [description]
     * @return string The requested includes, or all valid includes, or none
     */
    function response_get_include($get = '', $post = '', $collection = '', $format = '')
    {
        $include = '';
        $valid_includes = response_valid_includes();

        // We only use include for devices.
        if ($collection !== 'devices') {
            return $include;
        }

        if (!empty($get)) {
            $include = $get;
            log_message('debug', 'Set include according to GET (' . $get . ').');
        }
        if (!empty($post)) {
            $include = $post;
            log_message('debug', 'Set include according to POST (' . $post . ').');
        }
        return $include;
    }
}

if (!function_exists('response_get_limit')) {
    /**
     * [response_get_limit description]
     * @param  string $format [description]
     * @return [type]         [description]
     */
    function response_get_limit($get = '', $post = '', $format = '', $default_limit = 1000)
    {
        $limit = 0;

        if (!empty($get)) {
            $limit = intval($get);
            log_message('debug', 'Set include according to GET (' . $limit . ').');
        }
        if (!empty($post)) {
            $limit = intval($post);
            log_message('debug', 'Set include according to POST (' . $limit . ').');
        }
        if ($format === 'screen' && empty($limit)) {
            $limit = intval($default_limit);
            // log_message('debug', 'Set include according to SCREEN DEFAULT (' . $limit . ').');
        }
        if ($format === 'json' && empty($limit)) {
            $limit = intval($default_limit);
            // log_message('debug', 'Set include according to JSON DEFAULT (' . $limit . ').');
        }
        return $limit;
    }
}

if (!function_exists('response_get_links')) {
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
        $links = new \StdClass();
        $links->self = base_url() . '/index.php/' . $collection;
        if (!is_null($id)) {
            $links->self .= '/' . $id;
        }
        if ($sub_resource !== '') {
            $links->self .= '/' . $sub_resource;
        }
        if (!empty($sub_resource_id)) {
            $links->self .= '/' . $sub_resource_id;
        }
        $links->first = null;
        $links->last = null;
        $links->next = null;
        $links->prev = null;
        return $links;
    }
}

if (!function_exists('response_get_offset')) {
    /**
     * Determine the requested offset
     * @return [type] [description]
     */
    function response_get_offset($get = '', $post = '')
    {
        $offset = 0;

        if (!empty($get)) {
            $offset = intval($get);
            log_message('debug', 'Set offset according to GET (' . $offset . ').');
        }
        if (!empty($post)) {
            $offset = intval($post);
            log_message('debug', 'Set offset according to POST (' . $offset . ').');
        }
        return $offset;
    }
}

if (!function_exists('response_get_org_list')) {
    /**
     * Return the Org IDs list for the given collection for a supplied user
     * @param  string $collection [description]
     * @param  [type] $user       [description]
     * @return [type]             [description]
     */
    function response_get_org_list($instance, $collection = '')
    {
        #$instance = & get_instance();
        $org_list = array();

        if (empty($collection) or empty($instance->user)) {
            log_message('error', 'Either no collection or no user supplied.');
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
            case 'components':
            case 'connections':
            case 'credentials':
            case 'devices':
            case 'discoveries':
            case 'discovery_log':
            case 'floors':
            case 'integrations':
            case 'integrations_log':
            case 'integrations_rules':
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
                $org_list = array_unique(array_merge($instance->user->orgs, $instance->orgsModel->getUserDescendants($instance->user->orgs, $instance->orgs)));
                log_message('debug', 'Set org_list according to ' . $collection . ' for DESCENDANTS (' . implode(', ', $org_list) . ').');
                break;

            case 'configuration':
            case 'database':
            case 'errors':
            case 'help':
            case 'nmis':
            case 'san':
            case 'test':
            case 'util':
                $org_list = $instance->user->orgs;
                log_message('debug', 'Set org_list according to ' . $collection . ' for USER (' . implode(', ', $org_list) . ').');
                break;

            case 'attributes':
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
                $org_list = array_unique(array_merge($instance->user->orgs, $instance->orgsModel->getUserDescendants($instance->user->orgs, $instance->orgs)));
                $org_list = array_unique(array_merge($org_list, $instance->orgsModel->getUserAscendants($instance->user->orgs, $instance->orgs)));
                $org_list[] = 1;
                $org_list = array_unique($org_list);
                asort($org_list);
                log_message('debug', 'Set org_list according to ' . $collection . ' for PARENTS and DESCENDANTS (' . implode(', ', $org_list) . ').');
                break;

            default:
                $org_list = $instance->user->orgs;
                log_message('debug', 'Set org_list according to ' . $collection . ' for USER DEFAULT (' . implode(', ', $org_list) . ').');
                break;
        }
        $org_list = implode(',', $org_list);
        return $org_list;
    }
}

if (!function_exists('response_get_permission_ca')) {
    /**
     * Is the user allowed to perform $action on $collection according to their role membership
     * @param  class  $user          [description]
     * @param  string $collection    [description]
     * @param  string $action        [description]
     * @param  class  $received_data [description]
     * @param  int    $id            [description]
     * @return bool                  [description]
     */
    function response_get_permission_ca($user = null, $collection = '', $action = '', $received_data = null, $id = null, $usersModel = null)
    {
        $instance = & get_instance();
        $permissions = response_valid_permissions($collection);

        if (empty($instance->roles) && intval(config('Openaudit')->internal_version) >= 20160904) {
            return true;
        }

        if (empty($user->orgs)) {
            log_message('error', 'User has no permissions on any orgs. User: ' . json_encode($user));
            $instance->session->unset_userdata('user_id');
            \Config\Services::session()->setFlashdata('error', 'User has no permissions on any orgs.');
            header('Location: ' . url_to('logon'));
            exit;
        }

        if (empty($user) or empty($collection) or empty($action)) {
            log_message('critical', 'Cannot retrieve permission, missing attribute.');
            return false;
        }

        if ($collection === 'users' && intval($user->id) === intval($id) && $action === 'read') {
            // Always allow a user to READ their own object
            return true;
        }
        if ($collection === 'help') {
            // Always allow a user to view help
            return true;
        }
        if ($collection === 'errors') {
            // Always allow a user to view errors
            return true;
        }
        if ($collection === 'users' && $action === 'update' && $id === $user->id && ! empty($received_data)) {
            // A user is allowed to update some of their own fields
            $allowed_attributes = array('id', 'name', 'full_name', 'email', 'lang', 'password', 'dashboard_id');
            $check_permission = false;
            foreach (array_keys($received_data->attributes) as $key) {
                if (!in_array($key, $allowed_attributes)) {
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
        if ($collection === 'discovery_log') {
            $perm_collection = 'discoveries';
        }
        if ($collection === 'integrations_log') {
            $perm_collection = 'integrations';
        }
        if ($collection === 'integrations_rules') {
            $perm_collection = 'integrations';
        }
        // if (!$usersModel->get_user_permission($user->id, $perm_collection, $permissions[$action]) and config('Openaudit')->internal_version >= '20160904') {
        //     log_message('warning', 'User not permitted to perform ' . $action . ' on ' . $collection);
        //     return false;
        // }
        log_message('debug', 'User permitted to perform ' . $action . ' on ' . $collection);
        return true;
    }
}

if (!function_exists('response_get_permission_id')) {
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
        #$instance = & get_instance();
        $db = db_connect();
        $collections = array('charts', 'configuration', 'database', 'errors', 'help', 'ldap_servers', 'logs', 'nmis', 'queue', 'report', 'roles');

        if (empty($id) or in_array($collection, $collections)) {
            log_message('debug', 'User permitted to access ' . $collection);
            return true;
        }

        if ($collection === 'users' && $id === $user->id) {
            // Always allow a user to view their own user item
            return true;
        }

        $org_list = explode(',', $user->org_list);

        if ($collection === 'orgs') {
            $sql = 'SELECT `orgs`.`id` AS org_id FROM orgs WHERE id = ?';
            $result = $db->query($sql, [$id])->getResult();
            if (count($result) === 0 or !in_array($result[0]->org_id, $org_list)) {
                return false;
            }
            return true;
        }

        if ($collection === 'components') {
            if (!empty($received_data[0]->component_type)) {
                $component = $received_data[0]->component_type;
            } else {
                log_message('error', 'Calling a componets ' . $action . ' on URL for comonents requires components.type=$TYPE in the URL');
                return false;
            }
            if ($received_data[0]->component_type !== 'application' and $received_data[0]->component_type !== 'attachment' and $received_data[0]->component_type !== 'cluster' and $received_data[0]->component_type !== 'credential' and $received_data[0]->component_type !== 'image' and $received_data[0]->component_type !== 'rack_devices') {
                log_message('error', 'Invalid component.type provided: ' . $received_data[0]->component_type);
                return false;
            }
            $sql = "SELECT `$component`.*, devices.id, devices.org_id AS `org_id` FROM `$component` LEFT JOIN devices ON (`$component`.device_id = devices.id) WHERE `$component`.id = ?";
            $query = $db->query($sql, [$id]);
            if (!empty($query)) {
                $result = $query->getResult();
            }
            if (count($result) === 0 or !in_array($result[0]->org_id, $org_list)) {
                return false;
            }
            log_message('debug', 'User permitted to perform ' . $action . ' on ' . $collection . '::' . $id . '::' . $component);
            return true;
        }

        if (in_array($collection, response_valid_collections())) {
            $sql = "SELECT `{$collection}`.`org_id` AS org_id FROM `{$collection}` WHERE `id` = ?";
            $result = $db->query($sql, [$id])->getResult();
        }

        if (!in_array($collection, response_valid_collections())) {
            $sql = "SELECT devices.org_id AS org_id FROM `{$collection}` LEFT JOIN devices ON {$collection}.device_id = devices.id WHERE {$collection}.id = ?";
            $result = $db->query($sql, [$id])->getResult();
        }

        if (count($result) === 0) {
            \Config\Services::session()->setFlashdata('error', 'Requested item does not exist (' . $collection . '::' . intval($id) . ').');
            return false;
        }
        if (!in_array($result[0]->org_id, $org_list)) {
            \Config\Services::session()->setFlashdata('error', 'Requested item belongs to an Org this user has no permission on.');
            return false;
        }

        // check (if we're supplying data) that the OrgID is one we are allowed to supply
        if ($action === 'create' or $action === 'update' or $action === 'import' or $action === 'delete') {
            // org_id
            if (!empty($received_data->org_id)) {
                $allowed = false;
                foreach ($org_list as $key => $value) {
                    if ($received_data->org_id === $value) {
                        $allowed = true;
                    }
                }
                if (!$allowed) {
                    log_message('warning', 'User not permitted to perform ' . $action . ' on ' . $collection . ' ID ' . $id);
                    return false;
                }
            }
            // devices_assigned_to_org
            if (!empty($received_data->devices_assigned_to_org)) {
                $allowed = false;
                foreach ($org_list as $key => $value) {
                    if ($received_data->devices_assigned_to_org === $value) {
                        $allowed = true;
                    }
                }
                if (!$allowed) {
                    log_message('warning', 'User not permitted to perform ' . $action . ' on ' . $collection . ' ID ' . $id);
                    return false;
                }
            }
        }
        log_message('debug', 'User permitted to perform ' . $action . ' on ' . $collection . '::' . $id);
        return true;
    }
}

if (!function_exists('response_get_properties')) {
    /**
     * Determine and validate or supply default property list
     * @param  string $collection   The request collection
     * @param  string $action       The request action
     * @param  string $sub_resource The request sub_resource (if exists)
     * @return string               A comma separeted list of properties
     */
    function response_get_properties($collection = '', $action = '', $sub_resource = '', $get = '', $post = '')
    {
        $db = db_connect();
        $properties = '';
        $summary = '';
        $instance = & get_instance();

        if (!empty($get)) {
            $properties = $get;
            $summary = "Set properties according to GET.";
            // Allow for format of properties=["id", "name", "status"]
            if ($temp = json_decode($properties)) {
                $summary = "Set properties according to GET JSON.";
                $properties = implode(',', $temp);
            }
        }
        if (!empty($post)) {
            $properties = $post;
            $summary = "Set properties according to POST.";
            // Allow for format of properties=["id", "name", "status"]
            if ($temp = json_decode($properties)) {
                $properties = implode(',', $temp);
                $summary = 'Set properties according to POST JSON.';
            }
        }
        if ($collection === 'devices') {
            if ($action === 'collection' && ($properties === 'default' or $properties === '') && ($sub_resource === '' or $sub_resource === 'system')) {
                if ($properties === 'default') {
                    $summary = 'Set properties to config DEFAULT.';
                    $properties = config('Openaudit')->devices_default_retrieve_columns;
                } else {
                    if (!empty($instance->user->devices_default_display_columns)) {
                        $summary = 'Set properties to user default.';
                        $properties = $instance->user->devices_default_display_columns;
                    } else if (!empty(config('Openaudit')->devices_default_display_columns)) {
                        $summary = 'Set properties to config default.';
                        $properties = config('Openaudit')->devices_default_display_columns;
                    } else {
                        $summary = 'Set properties to default because neither user nor config are set.';
                        $properties = 'devices.id,devices.icon,devices.type,devices.name,devices.domain,devices.ip,devices.identification,devices.description,devices.manufacturer,devices.os_family,devices.status';
                    }
                }
            } else if ($action === 'collection' && $sub_resource !== '') {
                $summary = 'Set properties to ALL.';
                $properties = $sub_resource . '.*';
            }
        }
        if ($properties === 'all' or $properties === '*') {
            $properties = $collection . '.' . implode(','.$collection.'.', $db->getFieldNames($collection));
            $summary = 'Set properties to TABLE ALL.';
        }

        if (!empty($properties) and $properties !== $sub_resource . '.*') {
            // Validate the properties are database columns
            $properties = explode(',', $properties);
            for ($i=0; $i < count($properties); $i++) {
                if (strpos($properties[$i], '.') !== false) {
                    $temp = explode('.', $properties[$i]);
                    if (!$db->tableExists($temp[0])) {
                        log_message('warning', 'Invalid property supplied (' . (string)$properties[$i] . '), removed.');
                        unset($properties[$i]);
                    } else if (!$db->fieldExists($temp[1], $temp[0])) {
                        log_message('warning', 'Invalid property supplied (' . (string)$properties[$i] . '), removed.');
                        unset($properties[$i]);
                    }
                } else {
                    if (!$db->tableExists($collection)) {
                        log_message('warning', 'Invalid property supplied (' . (string)$properties[$i] . '), removed.');
                        unset($properties[$i]);
                    } else if (!$db->fieldExists($properties[$i], $collection)) {
                        log_message('warning', 'Invalid property supplied (' . (string)$properties[$i] . '), removed.');
                        unset($properties[$i]);
                    }
                }
            }
            $properties = implode(',', $properties);
        }

        if ($properties === '') {
            $properties = $collection . '.*';
            $summary = "Set properties to $properties.";
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
            $summary = 'Set properties according to FILTERING.';
        }
        if (!empty($properties)) {
            log_message('debug', $summary);
        }
        return $properties;
    }
}

if (!function_exists('response_get_sort')) {
    /**
     * Determine the requested sort
     * @param  string $collection The request collection
     * @return string             [description]
     */
    function response_get_sort($collection = '', $get = '', $post = '')
    {
        $db = db_connect();
        $sort = '';

        if (!empty($get)) {
            $sort = $get;
            $summary = 'Set sort according to GET';
        }
        if (! empty($post)) {
            $sort = $post;
            $summary = 'Set sort according to POST';
        }
        $sort = str_replace('+', '', $sort);
        if (!empty($sort)) {
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
                if (!$db->fieldExists($temp[1], $temp[0])) {
                    log_message('warning', 'Invalid sort attribute supplied (' . $properties[$i] . '), removed.');
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
        if (!empty($sort)) {
            log_message('debug', $summary . " ($properties).");
        }
        return $sort;
    }
}

if (!function_exists('response_get_sub_resource')) {
    /**
     * Determine the requested included sub-collections
     * @param  string $collection [description]
     * @param  string $format     [description]
     * @return string The requested includes, or all valid includes, or none
     */
    function response_get_sub_resource($get = '', $post = '', $uri = '', $collection = '', $format = '')
    {
        $sub_resource = '';

        if (!empty($get)) {
            $sub_resource = $get;
            $summary = 'Set sub_resource according to GET';
        }
        if (!empty($post)) {
            $sub_resource = $post;
            $summary = 'Set sub_resource according to POST';
        }
        if (!empty($uri)) {
            $sub_resource = $uri;
            $summary = 'Set sub_resource according to URI';
        }
        if (!empty($sub_resource) && $collection === 'devices') {
            $valid_sub_resources = response_valid_sub_resources();
            if ($format === 'screen' && (empty($sub_resource) or $sub_resource === '*' or $sub_resource === 'all')) {
                $sub_resource = implode(',', $valid_sub_resources);
            } else {
                $temp = explode(',', $sub_resource);
                for ($i=0; $i < count($temp); $i++) {
                    if (!in_array($temp[$i], $valid_sub_resources)) {
                        unset($temp[$i]);
                    }
                }
                $sub_resource = implode(',', $temp);
            }
            if (!empty($sub_resource)) {
                log_message('debug', $summary . " ($sub_resource).");
            }
        } else {
            $sub_resource = '';
        }
        return $sub_resource;
    }
}

if (!function_exists('response_get_sub_resource_id')) {
    /**
     * Determine the ID of the sub_resource
     * @param  string $sub_resource From $response->meta
     * @return int                  The requested resource ID
     */
    function response_get_sub_resource_id($uri = '', $get = '', $post = '')
    {

        $sub_resource_id = '';

        if (!empty($uri)) {
            $sub_resource_id = $uri;
            $summary = 'Set sub_resource_id according to URI';
        }
        if (!empty($get)) {
            $sub_resource_id = intval($get);
            $summary = 'Set sub_resource_id according to GET';
        }
        if (!empty($post)) {
            $sub_resource_id = intval($post);
            $summary = 'Set sub_resource_id according to POST';
        }
        if (!empty($sub_resource_id)) {
            log_message('debug', $summary . "($sub_resource_id).");
        }
        return $sub_resource_id;
    }
}

if (!function_exists('response_valid_actions')) {
    /**
     * An array of valid actions
     * @return array
     */
    function response_valid_actions()
    {
        return array('bulk_update_form', 'collection', 'create', 'create_form', 'debug', 'defaults', 'delete', 'dictionary', 'download', 'execute', 'export', 'export_form', 'help', 'import', 'importform', 'importjson', 'importjsonform', 'importnmisform', 'importnmis', 'read', 'reset', 'resetForm', 'test', 'update');
    }
}

if (!function_exists('response_valid_collections')) {
    /**
     * An array of valid collections
     * @return array
     */
    function response_valid_collections()
    {
        return array('agents','applications','attributes','baselines','baselines_policies','baselines_results','buildings','chart','clouds','clusters','collectors','components','configuration','connections','credentials','dashboards','database','devices','discoveries','discovery_log','discovery_scan_options','errors','fields','files','floors','groups','help','integrations','integrations_log','integrations_rules','ldap_servers','licenses','locations','logs','networks','nmis','orgs','queries','queue','racks','rack_devices','reports','roles','rooms','rows','rules','scripts','search','sessions','summaries','tasks','users','widgets');
    }
}

if (!function_exists('response_valid_current')) {
    /**
     * An array of valid current
     * @return array
     */
    function response_valid_current()
    {
        return array('y','n','all','delta','full');
    }
}

if (!function_exists('response_valid_formats')) {
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

if (!function_exists('response_valid_includes')) {
    /**
     * An array of valid includes
     * @return array
     */
    function response_valid_includes()
    {
        return array('application', 'attachment', 'audit_log', 'bios', 'certificate', 'change_log', 'cluster', 'credential', 'discovery_log', 'disk', 'dns', 'edit_log', 'field', 'file', 'image', 'ip', 'location', 'log', 'memory', 'module', 'monitor', 'motherboard', 'netstat', 'network', 'nmap', 'optical', 'pagefile', 'partition', 'policy', 'print_queue', 'processor', 'purchase', 'rack_devices', 'radio', 'route', 'san', 'scsi', 'server', 'server_item', 'service', 'share', 'software', 'software_key', 'sound', 'task', 'usb', 'user', 'user_group', 'variable', 'video', 'vm', 'windows');
    }
}

if (!function_exists('response_valid_permissions')) {
    /**
     * Set permissions array. Execute depends on $collection
     * @param  string $collection Execute depends on $collection
     * @return array              The array.
     */
    function response_valid_permissions($collection)
    {
        $permission = array();
        $permission['bulkupdate'] = 'u';
        $permission['bulkupdateform'] = 'u';
        $permission['collection'] = 'r';
        $permission['compare'] = 'r';
        $permission['create'] = 'c';
        $permission['createForm'] = 'c';
        $permission['createform'] = 'c';
        $permission['defaults'] = 'r';
        $permission['delete'] = 'd';
        $permission['dictionary'] = 'r';
        $permission['download'] = 'r';
        $permission['execute'] = 'u';
        $permission['export'] = 'r';
        $permission['help'] = 'r';
        $permission['import'] = 'c';
        $permission['importform'] = 'c';
        $permission['importjson'] = 'c';
        $permission['importjsonform'] = 'c';
        $permission['importnmis'] = 'c';
        $permission['importnmisform'] = 'c';
        $permission['read'] = 'r';
        $permission['reset'] = 'd';
        $permission['resetForm'] = 'd';
        $permission['resetform'] = 'd';
        $permission['test'] = 'u';
        $permission['update'] = 'u';
        return $permission;
    }
}

if (!function_exists('response_valid_sub_resources')) {
    /**
     * An array of valid sub_resources (for devices)
     * @return array
     */
    function response_valid_sub_resources()
    {
        return array('application', 'attachment', 'audit_log', 'bios', 'certificate', 'change_log', 'cluster', 'credential', 'discovery', 'discovery_log', 'disk', 'dns', 'edit_log', 'field', 'image', 'ip', 'log', 'memory', 'module', 'monitor', 'motherboard', 'netstat', 'network', 'nmap', 'optical', 'pagefile', 'partition', 'partition_graph', 'policy', 'print_queue', 'processor', 'radio', 'route', 'scsi', 'server', 'server_item', 'service', 'share', 'software', 'software_key', 'sound', 'task', 'usb', 'user', 'user_group', 'variable', 'video', 'vm', 'windows', 'report', 'query', 'group');
    }
}

if (!function_exists('valid_reserved_words')) {
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
