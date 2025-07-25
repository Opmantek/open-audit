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

        if (!empty($instance->config)) {
            $config = $instance->config;
        }
        if (empty($config)) {
            $config = config('Openaudit');
        }
        $db = db_connect();

        $response = new \StdClass();
        $response->meta = new \StdClass();
        $response->meta->action = strtolower($instance->method);
        $response->meta->collection = str_replace('\\app\\controllers\\', '', strtolower($instance->controller));
        if ($response->meta->collection === 'baselinesresults') {
            $response->meta->collection = 'baselines_results';
        }
        if ($response->meta->collection === 'discoverylog') {
            $response->meta->collection = 'discovery_log';
        }
        $response->meta->request_method = strtoupper(\Config\Services::request()->getMethod());
        if (is_cli()) {
            $response->meta->request_method = 'CLI';
        }
        if ($response->meta->collection === 'configuration' and ($response->meta->action === 'readlicense' or $response->meta->action === 'readservers')) {
            $response->meta->action = 'read';
        }

        $response->meta->remote_addr = '';
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            $response->meta->remote_addr = $_SERVER['HTTP_CLIENT_IP'];
        } else if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $response->meta->remote_addr = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } else if (!empty($_SERVER['HTTP_CF_CONNECTING_IP'])) {
            $response->meta->remote_addr = $_SERVER['HTTP_CF_CONNECTING_IP'];
        } else if (!empty($_SERVER['HTTP_FORWARDED_FOR'])) {
            $response->meta->remote_addr = $_SERVER['HTTP_FORWARDED_FOR'];
        } else if (!empty($_SERVER['REMOTE_ADDR'])) {
            $response->meta->remote_addr = $_SERVER['REMOTE_ADDR'];
        }

        // no dependencies - set in GET or POST or HEADERS or CLI
        $get_format = $request->getGet('format');
        if ($response->meta->request_method === 'CLI') {
            // Check if we've been passed a format on the CLI
            $getPath = $uri->getPath();
            if (!empty($getPath)) {
                foreach ($getPath as $segment) {
                    if (strpos($segment, 'format=') !== false) {
                        $get_format = str_replace('format=', '', $segment);
                    }
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
            $request->getHeaderLine('Accept')
        );

        if ($response->meta->collection === 'collections') {
            $response->meta->collection = strtolower(html_entity_decode(urldecode($uri->getSegment(1))));
            if (empty($response->meta->collection)) {
                $response->meta->collection = (!empty($config->homepage)) ? $config->homepage : 'summaries';
            }
        }
        $valid_collections = response_valid_collections();
        if (!in_array($response->meta->collection, $valid_collections)) {
            log_message('error', 'Invalid collection supplied (' . $response->meta->collection . '), removing.');
            $response->meta->collection = '';
        }


        $instance->user->org_list = response_get_org_list($instance->user, $response->meta->collection);
        $instance->user->org_array = array();
        foreach (explode(',', $instance->user->org_list) as $item) {
            $instance->user->org_array[] = intval($item);
        }

        $response->meta->id = null;
        // depends on collection - set in URI or POST
        $response->meta->id = response_get_id(
            html_entity_decode(urldecode($uri->getSegment(2))),
            $response->meta->collection,
            $instance->user->org_array
        );
        if (empty($response->meta->id) and ($response->meta->action === 'read' or $response->meta->action === 'update' or $response->meta->action === 'delete')) {
            log_message('warning', 'Request to ' . $response->meta->action . ' ' . $response->meta->collection . ', but no ID supplied.');
        }


        # We have what the user is trying to do and to what (if any) item - check permissions
        $permission_requested = response_valid_permissions($response->meta->collection);
        if (($response->meta->collection === 'dashboards' or $response->meta->collection === 'widgets') and $response->meta->action === 'execute') {
            $permission_requested['execute'] = 'r';
        }

        if ($response->meta->collection === 'configuration' and $response->meta->action === 'executeformemail') {
            $response->meta->action = 'read';
        }

        if ($response->meta->collection === 'configuration' and $response->meta->action === 'executeemail') {
            $response->meta->action = 'create';
        }
        if ($response->meta->collection === 'users' and $response->meta->action === 'update' and $response->meta->id === $instance->user->id) {
            if (strpos($instance->user->permissions['users'], 'r') === false) {
                // Allowed to read self
                $instance->user->permissions['users'] .= 'r';
            }
            if (strpos($instance->user->permissions['users'], 'u') === false) {
                // Allowed to update self
                $instance->user->permissions['users'] .= 'u';
            }
        }

        // log_message('debug', 'Action: ' . $response->meta->action);
        // log_message('debug', 'Collection: ' . $response->meta->collection);
        // log_message('debug', 'Permission Requested: ' . $permission_requested[$response->meta->action]);
        // log_message('debug', 'UserPermission: ' . $instance->user->permissions[$response->meta->collection]);
        // log_message('debug', 'ID: ' . $response->meta->id . ' is a ' . gettype($response->meta->id));
        // log_message('debug', 'UserID: ' . $instance->user->id . ' is a ' . gettype($instance->user->id));

        if ($response->meta->collection !== 'help') {
            if (empty($instance->user->permissions[$response->meta->collection]) or strpos($instance->user->permissions[$response->meta->collection], $permission_requested[$response->meta->action]) === false) {
                $message = 'User ' . $instance->user->full_name . ' requested to perform ' . $response->meta->action . ' on ' . $response->meta->collection . ', but has no permission to do so.';
                $response->errors = $message;
                $response->meta->header = 403;
                log_message('warning', $message);
                if ($response->meta->format === 'json') {
                    $instance->response->setStatusCode($response->meta->header);
                    echo json_encode($response);
                    exit();
                } else {
                    \Config\Services::session()->setFlashdata('error', $message);
                    header('Location: ' . url_to('home'));
                    exit();
                }
            } else {
                log_message('debug', 'User ' . $instance->user->full_name . ' requested to perform ' . $response->meta->action . ' on ' . $response->meta->collection . ', and has permission to do so.');
            }
        }
        $response->meta->permission_requested = $permission_requested;

        $response->links = new \StdClass();
        $response->included = array();
        $response->logs = array();

        $response->meta->access_token = @$instance->user->access_token;
        $response->meta->baseurl = base_url();
        if ($response->meta->collection === 'components') {
            $response->meta->current = 'y';
        }
        $response->meta->filtered = '';
        $response->meta->groupby = '';
        $response->meta->header = 200;
        // $response->meta->ids = null; // Only set below if it contains data
        $response->meta->include = '';
        $response->meta->license_string = '';
        $response->meta->limit = '';
        $response->meta->microtime = $config->microtime;
        $response->meta->offset = 0;
        $response->meta->properties = '';
        // NOTE see response_get_query_filter for why we do the below with the query string
        $query_string = $_SERVER['QUERY_STRING'];
        $replace_like = false;
        if (stripos($query_string, 'like%') !== false) {
            $query_string = str_replace('like%', 'like', $query_string);
            $replace_like = true;
        }
        $response->meta->query_string = urldecode($query_string);
        if ($replace_like) {
            $response->meta->query_string = str_replace('like', 'like%', $response->meta->query_string);
        }
        $response->meta->query_string = html_entity_decode($response->meta->query_string);
        $response->meta->requestor = '';
        if (!empty($_SERVER['HTTP_REQUESTOR'])) {
            $response->meta->requestor = (string)$_SERVER['HTTP_REQUESTOR'];
        }
        $response->meta->server_app_version = $config->display_version;
        $response->meta->server_platform = $config->server_platform;
        $response->meta->sort = '';
        if (!empty($GLOBALS['timer_start'])) {
            $response->meta->time_start = $GLOBALS['timer_start'];
        } else {
            $response->meta->time_start = microtime(true);
        }
        $response->meta->time_end = 0;
        $response->meta->time_elapsed = 0;
        $response->meta->total = 0;
        $response->meta->timestamp = $config->timestamp;
        $response->meta->timezone = $config->timezone;
        $response->meta->version = 1;
        $response->meta->filter = array();
        $response->meta->received_data = array();
        $response->meta->sql = array();
        $response->meta->user = $instance->user->name;

        // Set the GLOBALS for use in response_get_query_filter when we detect dataTables
        if (!empty($_GET['draw'])) {
            $GLOBALS['collection'] = $response->meta->collection;
        }

        // Set the heading based on the collection
        $response->meta->heading = ucfirst($response->meta->collection);

        if ($response->meta->collection === 'help') {
            $response->meta->action = 'about';
        }

        // no dependencies - set in GET or POST
        $temp = response_get_ids($request->getGet('ids'), $request->getPost('ids'));
        // Only set if not empty
        if (!empty($temp)) {
            $response->meta->ids = $temp;
        }

        // no dependencies - set in PATCH or POST, can set ID
        $response->meta->received_data = response_get_data($response->meta->request_method, @$_POST['data'], urldecode(str_replace('data=', '', @file_get_contents('php://input'))));

        if (!empty($response->meta->received_data->id)) {
            if ($response->meta->collection !== 'database' && $response->meta->collection !== 'configuration' and $response->meta->received_data->id !== 'dictionary') {
                $response->meta->id = intval($response->meta->received_data->id);
            }
        }

        // If we're creating data (POST), we should have an access token (configuration depending)
        if (!empty($response->meta->received_data) and !($response->meta->collection === 'collectors' and $response->meta->action === 'create')) {
            $session = \Config\Services::session();
            if ($response->meta->request_method === 'POST' && !empty($config->access_token_enable) && $config->access_token_enable === 'y') {
                if (empty($response->meta->received_data->access_token)) {
                    $message = 'No access token provided when creating ' . $response->meta->collection . ', refresh the form and try again.';
                    log_message('error', $message);
                    $response->errors = $message;
                    $response->meta->header = 400;
                    if ($response->meta->format !== 'html') {
                        $instance->response->setStatusCode($response->meta->header);
                        $instance->resp = $response;
                        output($instance);
                        exit();
                    } else {
                        \Config\Services::session()->setFlashdata('error', $message);
                        header('Location: ' . url_to($response->meta->collection . 'Collection'));
                        exit();
                    }
                # } else if (!in_array($response->meta->received_data->access_token, $instance->user->access_token)) {
                } else if (!in_array($response->meta->received_data->access_token, $session->get('access_token'))) {
                    $message = 'An invalid access token was provided when creating ' . $response->meta->collection . ', refresh the form and try again.';
                    log_message('error', $message);
                    $response->errors = $message;
                    $response->meta->header = 400;
                    if ($response->meta->format !== 'html') {
                        $instance->response->setStatusCode($response->meta->header);
                        $instance->resp = $response;
                        output($instance);
                        exit();
                    } else {
                        \Config\Services::session()->setFlashdata('error', $message);
                        header('Location: ' . url_to($response->meta->collection . 'Collection'));
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
            $response->meta->collection
        );

        // depends on version affecting URI, collection
        if (!empty($request->getGet('sort'))) {
            $response->meta->sort = response_get_sort(
                $response->meta->collection,
                $request->getGet('sort')
            );
        }

        // depends on version affecting URI, collection
        $response->meta->groupby = response_get_groupby($request->getGet('groupby'), $response->meta->collection);

        // no dependencies - set in GET or 0
        $response->meta->offset = (!empty($request->getGet('offset'))) ? intval($request->getGet('offset')) : 0;

        // no dependencies - set in GET or Config
        $response->meta->limit = (!empty($request->getGet('limit'))) ? intval($request->getGet('limit')) : $config->page_size;

        // depends on collection
        $response->meta->properties = response_get_properties(
            $response->meta->collection,
            $response->meta->action,
            $request->getGet('properties'),
            $request->getPost('properties'),
            $instance->user
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

        if ($test and !in_array($response->meta->collection, ['benchmarks_policies', 'configuration', 'database', 'discovery_log', 'errors', 'help', 'nmis', 'roles', 'san', 'test', 'util'])) {
            $item = new \StdClass();
            $item->name = 'orgs.id';
            if ($response->meta->collection !== 'orgs') {
                $item->name = $response->meta->collection . '.' . 'org_id';
            }
            $item->function = 'whereIn';
            $item->operator = 'in';
            $item->value = $instance->user->org_array;
            $response->meta->filter[] = $item;
        }

        if ($response->meta->collection === 'discovery_log') {
            $item = new \StdClass();
            $item->name = 'discoveries.org_id';
            $item->function = 'whereIn';
            $item->operator = 'in';
            $item->value = $instance->user->org_array;
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
            if (!empty($_SESSION['error'])) {
                $message = $_SESSION['error'];
            }
            log_message('warning', $message);
            $response->meta->header = 403;
            $response->errors = $message;
            if ($response->meta->format !== 'html') {
                $instance->response->setStatusCode($response->meta->header);
                $instance->resp = $response;
                output($instance);
                exit();
            } else {
                if (empty($_SESSION['error'])) {
                    \Config\Services::session()->setFlashdata('error', $message);
                }
                header('Location: ' . url_to($response->meta->collection . 'Collection'));
                exit();
            }
        }
        if (!empty($instance->response->logs)) {
            $response->logs = $instance->response->logs;
        }

        if (!empty($config->feature_news) and $config->feature_news === 'n' and in_array($response->meta->action, ['collection', 'read']) and $response->meta->format === 'html') {
            $reminder_days = (!empty($config->feature_news_remind_days)) ? intval($config->feature_news_remind_days) : 30;
            $last_request_date = (!empty($config->feature_news_last_request_date)) ? strtotime("+" . $reminder_days . " days", strtotime($config->feature_news_last_request_date)) : strtotime('2001-01-01');
            $today = strtotime(date('Y-m-d'));
            if ($last_request_date < $today) {
                $conf = model('ConfigurationModel');
                $conf_data = $conf->readName('feature_news');
                $conf_id = (!empty($conf_data[0]->id)) ? intval($conf_data[0]->id) : 0;
                $_SESSION['success'] = 'Why not enable \'news\'? Keep up-to-date with the latest fixes, announcements, query updates, software versions and more. Click <a href="' . url_to('configurationRead', $conf_id) . '">here</a> to enable.';
                $db = db_connect();
                $sql = "UPDATE `configuration` SET `value` = ? WHERE `name` = 'feature_news_last_request_date'";
                $result = $db->query($sql, [date('Y-m-d')]);
                unset($conf);
                unset($conf_data);
                unset($conf_id);
            }
        }

        # Enterprise
        $license_config = false;
        if ($response->meta->collection === 'configuration' and ($response->meta->id === $config->license_string_id or $response->meta->id === $config->license_string_collector_id)) {
            $license_config = true;
        }
        if ($response->meta->collection === 'roles' and $response->meta->action === 'create') {
            $license_config = true;
        }
        $permission_requested = $response->meta->permission_requested;
        $collections = new \Config\Collections();
        if (!empty($config->enterprise_binary) and ($db->tableExists('enterprise') and !empty($collections->{$response->meta->collection}->edition) and $collections->{$response->meta->collection}->edition !== 'Community') or $license_config === true) {
            $query_string = $response->meta->query_string;
            unset($response->meta->query_string);
            $function = $response->meta->collection . '_' . $response->meta->action;
            if (
                !in_array($function, array("baselines_create", "baselines_execute", "benchmarks_create", "clusters_create", "collectors_create", "collectors_register", "configuration_update", "dashboards_create", "discovery_scan_options_create", "discovery_scan_options_update", "executables_create", "racks_create", "roles_create", "standards_create", "tasks_create", "widgets_create", "widgets_update")) and
                !($function === 'configuration_update' and ($response->meta->id === $config->license_string_id or $response->meta->id === $config->license_string_collector_id))
            ) {
                $received_data = $response->meta->received_data;
                $response->meta->received_data = array();
            }
            if ($function === 'configuration_update' and $response->meta->id === $config->license_eula_id) {
                $received_data = $response->meta->received_data;
                $response->meta->received_data = array();
            }
            if ($function === 'configuration_update' and $response->meta->id === $config->license_string_id) {
                if (is_string($response->meta->received_data->attributes->value)) {
                    $response->meta->received_data->attributes->value = trim($response->meta->received_data->attributes->value);
                    $response->meta->received_data->attributes->value = str_replace("\n", "", $response->meta->received_data->attributes->value);
                }
            }
            if ($function === 'configuration_update' and $response->meta->id === $config->license_string_collector_id) {
                $response->meta->received_data->attributes->value = trim($response->meta->received_data->attributes->value);
                $response->meta->received_data->attributes->value = str_replace("\n", "", $response->meta->received_data->attributes->value);
            }
            // We need Orgs for these, associated with the user, supply them here
            if ($response->meta->collection === 'tasks' and $response->meta->action === 'execute') {
                $response->meta->orgs = response_get_org_list($instance->user, 'devices');
            }
            if ($response->meta->collection === 'baselines' and $response->meta->action === 'execute') {
                $response->meta->orgs = response_get_org_list($instance->user, 'devices');
            }
            $response->meta->user_details = $instance->user;
            $response->meta->config = clone $config;
            unset($response->meta->config->modules);
            unset($response->meta->config->enterprise_binary);
            unset($response->meta->config->commercial_dir);
            // Insert the entry
            $sql = "INSERT INTO enterprise VALUES (null, ?, '', NOW(), '')";
            $db->query($sql, [json_encode($response)]);
            $id = $db->insertID();
            // Call the binary and wait for it's response
            unset($output);
            if (php_uname('s') === 'Windows NT') {
                $command = "%comspec% /c start /b " . $config->enterprise_binary . " $id";
                if (!empty($_SERVER['CI_ENVIRONMENT']) and $_SERVER['CI_ENVIRONMENT'] === 'development') {
                    $command = "%comspec% /c start /b " . $config->enterprise_binary . " --debug $id";
                    log_message('debug', $command);
                }
                $cwd = getcwd();
                chdir('C:\\xampp\\open-audit\\other');
                @exec($command, $output);
                pclose(popen($command, 'r'));
                chdir($cwd);
            } else {
                $command = $config->enterprise_binary . " $id";
                if (!empty($_SERVER['CI_ENVIRONMENT']) and $_SERVER['CI_ENVIRONMENT'] === 'development') {
                    $command = $config->enterprise_binary . " --debug $id 2>&1";
                    log_message('debug', $command);
                }
                if (!empty($config->enterprise_env) and strpos($command, 'enterprise.bin') !== false) {
                    $command = 'export PAR_GLOBAL_TMPDIR=' . $config->enterprise_env . '; ' . $command;
                }
                @exec($command, $output);
            }
            if (!empty($output)) {
                log_message('debug', 'Output: ' . json_encode($output));
                $string = 'There is an issue with Enterprise functionality. Output below:';
                foreach ($output as $line) {
                    $string = $string . "<br>" . $line;
                }
                \Config\Services::session()->setFlashdata('error', $string);
            }
            $sql = "SELECT * FROM enterprise WHERE id = $id";
            $result = $db->query($sql)->getResult();
            // Convert the response
            try {
                $r = json_decode($result[0]->response, false, 512, JSON_THROW_ON_ERROR);
            } catch (\JsonException $e) {
                log_message('error', 'Could not decode JSON. File:' . basename(__FILE__) . ', Line:' . __LINE__ . ', Error: ' . $e->getMessage());
                \Config\Services::session()->setFlashdata('error', 'There is an issue with Enterprise functionality. Please contact <a target="_blank" href="https://firstwave.com">FirstWave</a> for support.');
                log_message('error', 'Could not decode JSON response from enterprise.');
                log_message('error', "Response: " . @$result[0]->response . "\n");
            }
            if (!empty($r)) {
                $response = $r;
            }
            $response->meta->permission_requested = $permission_requested;
            if (!empty($response->meta->license)) {
                $config->license = $response->meta->license;
                unset($response->meta->license);
            }
            if (!empty($response->meta->product)) {
                $config->product = $response->meta->product;
                unset($response->meta->product);
            }
            // Delete the DB entry
            if (empty($_SERVER['CI_ENVIRONMENT']) or $_SERVER['CI_ENVIRONMENT'] !== 'development') {
                $sql = "DELETE FROM enterprise WHERE id = $id";
                $db->query($sql);
            }
            if (!empty($_SERVER['CI_ENVIRONMENT']) and $_SERVER['CI_ENVIRONMENT'] === 'development') {
                $sql = "DELETE FROM enterprise WHERE DATE(timestamp) < SUBDATE(CURDATE(), 0)";
                $db->query($sql);
            }
            if (
                !in_array($function, array("baselines_create", "baselines_execute", "benchmarks_create", "clusters_create", "collectors_create", "collectors_register", "configuration_update", "dashboards_create", "discovery_scan_options_create", "discovery_scan_options_update", "executables_create", "racks_create", "roles_create", "standards_create", "tasks_create", "widgets_create", "widgets_update")) and
                !($function === 'configuration_update' and ($response->meta->id === $config->license_string_id or $response->meta->id === $config->license_string_collector_id))
            ) {
                $response->meta->received_data = $received_data;
            }
            if ($function === 'configuration_update' and $response->meta->id === $config->license_eula_id) {
                $response->meta->received_data = $received_data;
            }
            // TODO - Why does enterprise return this as a string?
            if (isset($response->meta->limit) and !empty($response->meta->limit)) {
                $response->meta->limit = intval($response->meta->limit);
            }
            if (!empty($response->errors)) {
                \Config\Services::session()->setFlashdata('error', $response->errors);
            }
            unset($response->meta->user_details);
            unset($response->meta->config);
            $response->meta->query_string = $query_string;
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
    function response_get_data($request_method = '', $post = null, $patch = '')
    {
        $data_supplied_by = '';
        $received_data = array();

        if ($request_method === 'POST') {
            if (!empty($post) && is_array($post)) {
                $summary = 'Set received data according to POST (form).';
                $received_data = $post;
                $received_data = json_encode($received_data);
                try {
                    $received_data = json_decode($received_data, false, 512, JSON_THROW_ON_ERROR);
                } catch (\JsonException $e) {
                    log_message('error', 'Could not decode JSON. File:' . basename(__FILE__) . ', Line:' . __LINE__ . ', Error: ' . $e->getMessage());
                }
                $data_supplied_by = 'form';
                if (!empty($received_data->json) and is_string($received_data->json)) {
                    try {
                        $received_data->json = json_decode($received_data->json, false, 512, JSON_THROW_ON_ERROR);
                    } catch (\JsonException $e) {
                        log_message('error', 'Could not decode JSON. File:' . basename(__FILE__) . ', Line:' . __LINE__ . ', Error: ' . $e->getMessage());
                    }
                }
            } else if (!empty($post)) {
                $summary = 'Set received data according to POST (json).';
                // This is straight JSON submitted data in a string
                try {
                    $received_data = json_decode($post, false, 512, JSON_THROW_ON_ERROR);
                } catch (\JsonException $e) {
                    log_message('error', 'Could not decode JSON. File:' . basename(__FILE__) . ', Line:' . __LINE__ . ', Error: ' . $e->getMessage());
                }
                $data_supplied_by = 'json';
            }
        }
        if ($request_method === 'PATCH') {
            #$data_json = urldecode(str_replace('data=', '', file_get_contents('php://input')));
            if (empty($patch)) {
                log_message('warning', 'Patch request, but no data.');
                return $received_data;
            }
            $data_json = $patch;
            try {
                $data_object = json_decode($data_json, false, 512, JSON_THROW_ON_ERROR);
            } catch (\JsonException $e) {
                log_message('error', 'Could not decode JSON. File:' . basename(__FILE__) . ', Line:' . __LINE__ . ', Error: ' . $e->getMessage());
            }
            if (!empty($data_object->data->attributes->options)) {
                $options = $data_object->data->attributes->options;
            }
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

if (!function_exists('response_get_query_filter')) {
    /**
     * [response_get_filter description]
     * @param  [type] $query_string [description]
     * @return [type]               [description]
     */
    function response_get_query_filter($query_string, $type = '')
    {
        # $instance = & get_instance();
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

        $dataTables = false;
        if (!empty($GLOBALS['collection'])) {
            $dataTables = true;
            $collection = $GLOBALS['collection'];
            $db = db_connect();
        }

        if (!empty($query_string)) {
            foreach (explode('&', $query_string) as $item) {
                if (empty($item)) {
                    continue;
                }
                if (strpos($item, '=') === false) {
                    continue;
                }
                $name = substr($item, 0, strpos($item, '='));
                unset($value);

                if ($dataTables) {
                    $value = str_replace($name . '=', '', $item);
                    if ($value === '') {
                        continue;
                    }
                    if (in_array($name, ['draw', '_', 'search[regex]']) or strpos($name, 'column') !== false) {
                        continue;
                    }
                    if ($name === 'search[value]') {
                        $name = 'search';
                    }
                    if ($collection === 'discovery_log' and ($name === 'status' or $name === 'discovery_log.status')) {
                        // Hack because GUI has a column heading of Status and we don't expect users to realise we actually show the command_status column
                        $name = 'discovery_log.command_status';
                    }

                    if (strpos($name, '.') === false and $name !== 'search') {
                        if ($db->tableExists($collection) and $db->fieldExists($name, $collection)) {
                            $name = $collection . '.' . $name;
                        }
                        if ($collection === 'discovery_log' and $db->fieldExists($name, 'devices')) {
                            $name = 'devices.' . $name;
                        }
                    }
                }

                $query = new \StdClass();
                $query->name = preg_replace('/[^A-Za-z0-9\.\_]/', '', $name);
                $query->function = 'where';
                $query->operator = '';
                $query->value = str_replace($name . '=', '', $item);
                $query->value = (isset($value)) ? $value : $query->value;
                unset($value);

                if (strtolower(substr($query->value, 0, 8)) === 'not like') {
                    $query->value = substr($query->value, 8);
                    if (strpos($query->value, '%') === false) {
                        $query->value = '%' . $query->value . '%';
                    }
                    $query->function = 'where';
                    $query->operator = 'not like';
                }

                if (strtolower(substr($query->value, 0, 5)) === '!like') {
                    $query->value = substr($query->value, 5);
                    if (strpos($query->value, '%') === false) {
                        $query->value = '%' . $query->value . '%';
                    }
                    $query->function = 'where';
                    $query->operator = 'not like';
                }

                $operator = substr($query->value, 0, 4);
                if (strtolower($operator) === 'like') {
                    $query->value = substr($query->value, 4);
                    if (strpos($query->value, '%') === false) {
                        $query->value = '%' . $query->value . '%';
                    }
                    $query->function = 'where';
                    $query->operator = 'like';
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
                    if ($dataTables) {
                        $query->operator = '';
                    }
                }

                if (is_string($query->value) and substr($query->value, 0, 3) === 'in(' && strpos($query->value, ')') === strlen($query->value) - 1) {
                    $query->value = substr($query->value, 2);
                    $query->function = 'whereIn';
                    $query->operator = 'in';
                    $values = explode(',', trim((string)$query->value, '()'));
                    $query->value = array();
                    foreach ($values as $key => $value) {
                        $values[$key] = trim((string)$values[$key], '"\'');
                        if (($query->name === 'ip' or stripos($query->name, '.ip') !== false) and filter_var($values[$key], FILTER_VALIDATE_IP)) {
                            $values[$key] = ip_address_to_db($values[$key]);
                        }
                        if (is_numeric($values[$key])) {
                            $values[$key] = intval($values[$key]);
                        }
                        $query->value[] = $values[$key];
                    }
                }

                if (is_string($query->value) and substr($query->value, 0, 6) === 'notin(' && strpos($query->value, ')') === strlen($query->value) - 1) {
                    $query->value = substr($query->value, 5);
                    $query->function = 'whereNotIn';
                    // $query->operator = 'not in'; // NOTE - changed to notin below so we can use it in the dataTables URL creation
                    $query->operator = 'notin';
                    $values = explode(',', trim((string)$query->value, '()'));
                    $query->value = array();
                    foreach ($values as $key => $value) {
                        $values[$key] = trim(trim((string)$values[$key]), '"\'');
                        if (($query->name === 'ip' or stripos($query->name, '.ip') !== false) and filter_var($values[$key], FILTER_VALIDATE_IP)) {
                            $values[$key] = ip_address_to_db($values[$key]);
                        }
                        if (is_numeric($values[$key])) {
                            $values[$key] = intval($values[$key]);
                        }
                        $query->value[] = $values[$key];
                    }
                }

                // Accept first_seen, last_seen, edited_date and timestamp as numeric unix_timestamp's and convert them to a local timestamp string
                // TODO - what if we have one of these attributes and our value is in a LIKE array, ie, not a string
                $item = substr($query->name, strpos($query->name, '.') + 1);
                if (($item === 'first_seen' or $item === 'last_seen' or $item === 'when' or $item === 'edited_date' or $item === 'timestamp') && is_numeric($query->value)) {
                    if ($query->operator === 'like' or $query->operator === 'not like') {
                        $query->value = str_replace('%', '', $query->value);
                    }
                    $query->value = from_unix_timestamp($query->value);
                    if ($query->operator === 'like' or $query->operator === 'not like') {
                        $query->value = '%' . $query->value . '%';
                    }
                }

                if (!empty($query->name) and !in_array($query->name, $reserved_words) and $type === 'filter') {
                    $filter[] = $query;
                }

                if ($query->name === 'search' and $dataTables === true) {
                    $filter[] = $query;
                }

                if ($type === 'query') {
                    $filter[] = $query;
                }
                unset($query);
            }

            if ($dataTables) {
                foreach ($filter as $query) {
                    if ($query->operator === '' and strpos($query->name, 'id') !== (strlen($query->name) - 2) and gettype($query->value) === 'string') {
                        // We default to a LIKE clause for dataTables filtering
                        // To use an EQUALS clause, specify =value in the search field,
                        // this will translate to column==value and hence be covered above
                        // Additionally, if we have 'id' on the end of the name, skip this block and use the next block below to set =
                        if (strpos($query->name, '.ip') === (strlen($query->name) - 3) or $query->name === 'ip') {
                            $query->value = ip_address_to_db($query->value);
                        }
                        if (strpos($query->value, '%') === false) {
                            $query->value = '%' . $query->value . '%';
                        }
                        $query->function = 'where';
                        $query->operator = 'like';
                    }
                    if ($query->operator === '' and strpos($query->name, 'id') === (strlen($query->name) - 2) and gettype($query->value) === 'string') {
                        $query->operator = '=';
                    }
                }
            }
        }
        if (!empty($filter)) {
            log_message('debug', strtoupper($type) . ': ' . json_encode($filter, JSON_PRETTY_PRINT));
        }
        return $filter;
    }
}

if (!function_exists('response_get_format')) {
    /**
     * Return the response format derived from the HEADERS or URL (GET) or BODY (POST)
     *
     * @param string $get    Format from GET parameter
     * @param string $post   Format from POST body
     * @param string $header Value of the Accept header
     * @return string        The response format requested
     */
    function response_get_format($get = '', $post = '', $header = '')
    {

        $valid_formats = response_valid_formats();
        $header = strtolower(trim($header));

        if (!empty($get) and in_array($get, $valid_formats)) {
            log_message('debug', "Set format according to GET ($get).");
            return $get;
        }
        if (!empty($post) and in_array($post, $valid_formats)) {
            log_message('debug', "Set format according to POST ($post).");
            return $post;
        }
        if (!empty($header) and strpos($header, 'application/json') !== false) {
            log_message('debug', "Set format according to HEADER application/json (json).");
            return 'json';
        }
        if (!empty($header) and strpos($header, 'html') !== false) {
            log_message('debug', "Set format according to HEADER {$header} (html).");
            return 'html';
        }
        if (!empty($header) and strpos($header, 'text/csv') !== false) {
            log_message('debug', "Set format according to HEADER {$header} (csv).");
            return 'csv';
        }
        if (!empty($header) and strpos($header, 'text/xml') !== false) {
            log_message('debug', "Set format according to HEADER {$header} (xml).");
            return 'xml';
        }
        // Default
        if (!empty($header) and strpos($header, '*/*') !== false) {
            log_message('debug', "Set format according to HEADER {$header} (json).");
            return 'json';
        }
        log_message('warning', 'Set format to json, because unknown format: ' . $get . ' / ' . $post . ' / ' . $header . ' (json).');
        return 'json';
    }
}

if (!function_exists('response_get_groupby')) {
    /**
     * Determine and validate the requested groupby
     * @param  string $get  The groupby=table.column name from $_GET
     * @return string $post The groupby=table.column name from $_POST
     */
    function response_get_groupby(?string $get = '', ?string $collection = '')
    {
        $groupby = (!empty($get)) ? $get : '';
        if (!empty($groupby)) {
            $db = db_connect();
            if (strpos($groupby, '.') !== false) {
                $temp = explode('.', $groupby);
                if (!$db->fieldExists($temp[1], $temp[0])) {
                    $groupby = '';
                } else {
                    $groupby = $temp[0] . '.' . $temp[1];
                }
            } else {
                if (!$db->fieldExists($groupby, $collection)) {
                    $groupby = '';
                } else {
                    $groupby = $collection . '.' . $groupby;
                }
            }
        }
        if ($groupby !== '') {
            log_message('debug', 'GroupBy: ' . $groupby);
        } else if (!empty($get)) {
            log_message('warning', "GroupBy: Invalid groupby supplied ({$groupby}), removed.");
        }
        return $groupby;
    }
}

if (!function_exists('response_get_id')) {
    /**
     * Determine if we are passed an ID or a name and return an integer ID
     * @param  string $id          The requested ID from $_GET
     * @param  string $collection  The collection from response->meta->collection
     * @param  array  $org_array   The user->org_array of OrgIDs as an array of integers that the user has access to for this collection
     * @return int|null
     */
    function response_get_id($id = '', $collection = '', $org_array = [])
    {
        if (empty($id)) {
            return null;
        }
        if (is_numeric($id)) {
            return intval($id);
        } else {
            if ($collection === 'components') {
                // We must have a numeric ID for components because we don't know which table the user is referencing here.
                // If you need to provide a name, do it thus: components.type=processor&components.name=Intel Core...
                // That will give you a filtered collection
                return null;
            }
            $db = db_connect();
            // TODO - have we already validate the action before calling this function? If so, remove
            $actions = response_valid_actions();
            // TODO - have we already validate the collection before calling this function? If so, remove
            $collections = response_valid_collections();
            $no_org_id = array('configuration', 'roles');
            if (!in_array($id, $actions)) {
                // Our 'id' is a string, but not an action - therefore it's a name
                if ($collection === 'database') {
                    $tables = $db->listTables();
                    if (!in_array($id, $tables)) {
                        log_message('warning', "No ID to Name match in database (Provided ID: $id).");
                        $id = null;
                    } else {
                        log_message('debug', "ID to Name match in database (Provided ID: $id).");
                    }
                } else if ($collection === 'baselines_policies') {
                    // TODO - We have org_id in baselines_policies - remove this
                    // baselines_policies.baseline_id -> baselines.id -> baselines.org_id
                    $sql = "SELECT baselines_policies.id FROM baselines_policies LEFT JOIN baselines ON (baselines_policies.baseline_id = baselines.id) WHERE baselines_policies.name LIKE ? AND baselines.org_id IN ? ORDER BY id DESC LIMIT 1";
                    $result = $db->query($sql, [$id, $org_array])->getResult();
                    if (!empty($result)) {
                        log_message('debug', "ID to Name match in baselines_policies (Provided ID: $id, Database ID: " . intval($result[0]->id) . ").");
                        $id = intval($result[0]->id);
                    } else {
                        log_message('warning', 'No ID to Name match in baselines_policies.');
                        $id = null;
                    }
                } else if ($collection === 'collectors') {
                    // TODO - remove this
                    // $sql = "SELECT id FROM collectors WHERE uuid = ? ORDER BY id DESC LIMIT 1";
                    // $result = $db->query($sql, [$id])->getResult();
                    // if (!empty($result)) {
                    //     log_message('debug', "ID to Name match in collectors (Provided UUID: $id, Database ID: " . intval($result[0]->id) . ").");
                    //     $id = intval($result[0]->id);
                    // } else {
                    //     log_message('warning', "No UUID match in collectors (Provided UUID: $id).");
                    //     $id = null;
                    // }
                } else if ($collection === 'devices') {
                    // TODO - remove this
                    // devices
                    $sql = "SELECT id FROM devices WHERE name LIKE ? AND org_id IN ? ORDER BY id DESC LIMIT 1";
                    $result = $db->query($sql, [$id, $org_array])->getResult();
                    if (!empty($result)) {
                        log_message('debug', "ID to Name match in devices (Provided ID: $id, Database ID: " . intval($result[0]->id) . ").");
                        $id = intval($result[0]->id);
                    } else {
                        log_message('warning', "No ID to Name match in devices (Provided ID: $id).");
                        $id = null;
                    }
                } else if ($collection === 'orgs') {
                    // orgs.id, not *.org_id
                    $sql = "SELECT id FROM orgs WHERE name LIKE ? AND id IN ? ORDER BY id DESC LIMIT 1";
                    $result = $db->query($sql, [$id, $org_array])->getResult();
                    if (!empty($result)) {
                        log_message('debug', "ID to Name match in orgs (Provided ID: $id, Database ID: " . intval($result[0]->id) . ").");
                        $id = intval($result[0]->id);
                    } else {
                        log_message('warning', "No ID to Name match in orgs (Provided ID: $id).");
                        $id = null;
                    }
                } else if ($collection === 'users') {
                    // Special case the username as we may be given user.name@domain.com for LDAP user, but we only use user.name in users.name
                    $sql = "SELECT id FROM users WHERE name LIKE ? AND org_id IN ? ORDER BY id DESC LIMIT 1";
                    $temp = explode('@', $id);
                    $data = array($temp[0]);
                    unset($temp);
                    $result = $db->query($sql, [$data, $org_array])->getResult();
                    if (!empty($result)) {
                        log_message('debug', "ID to Name match in users (Provided ID: $id, Database ID: " . intval($result[0]->id) . ").");
                        $id = intval($result[0]->id);
                    } else {
                        log_message('warning', "No ID to Name match in users (Provided ID: $id).");
                        $id = null;
                    }
                } else if (in_array($collection, $no_org_id)) {
                    // log_message('debug', 'No OrgID required for ' . $collection);
                    // $id = 1;
                    $sql = "SELECT id FROM {$collection} WHERE name LIKE ? ORDER BY id DESC LIMIT 1";
                    $result = $db->query($sql, [$id])->getResult();
                    if (!empty($result)) {
                        log_message('debug', "ID to Name match in $collection (Provided ID: $id, Database ID: " . intval($result[0]->id) . ").");
                        $id = intval($result[0]->id);
                    } else {
                        log_message('warning', "No ID to Name match in $collection.");
                        $id = null;
                    }
                } else if ($collection === 'benchmarks_policies') {
                    $sql = "SELECT id FROM benchmarks_policies WHERE external_ident = ? ORDER BY id DESC LIMIT 1";
                    $result = $db->query($sql, [$id])->getResult();
                    if (!empty($result)) {
                        log_message('debug', "ID to ExternalIdent match in benchmarks_policies (Provided ID: $id, Database ID: " . intval($result[0]->id) . ").");
                        $id = intval($result[0]->id);
                    } else {
                        log_message('warning', "No ID to ExternalIdent match in benchmarks_policies (Provided ID: $id).");
                        $id = null;
                    }
                } else if (in_array($collection, $collections)) {
                    $sql = "SELECT id FROM {$collection} WHERE name LIKE ? AND org_id IN ? ORDER BY id DESC LIMIT 1";
                    $result = $db->query($sql, [$id, $org_array])->getResult();
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
        }
        if (!empty($post)) {
            $device_ids = $post;
        }
        if (isset($device_ids) and $device_ids !== '') {
            if (is_string($device_ids)) {
                // Remove a trailing comma if we have one
                if (substr($device_ids, -1) === ',') {
                    $device_ids = substr($device_ids, 0, -1);
                }
                // Set all values to int's
                $temp = explode(',', $device_ids);
                for ($i = 0; $i < count($temp); $i++) {
                    $temp[$i] = intval($temp[$i]);
                }
            } else if (is_array($device_ids)) {
                $temp = $device_ids;
            } else {
                log_message('warn', 'Invalid item (not string or array) passed as device_ids.');
                return '';
            }
            // Unique values only
            $temp = array_unique($temp);
            // And sort them
            asort($temp);
            // Join by comma's
            $device_ids = implode(',', $temp);
            unset($temp);
        }
        if (!empty($get)) {
            log_message('debug', 'Set IDs according to GET (' . $device_ids . ').');
        }
        if (!empty($post)) {
            log_message('debug', 'Set IDs according to POST (' . $device_ids . ').');
        }
        return $device_ids;
    }
}

if (!function_exists('response_get_include')) {
    /**
     * Determine the requested included sub-collections
     * @param  string $collection [description]
     * @return string The requested includes, or all valid includes, or none
     */
    function response_get_include($get = '', $post = '', $collection = '')
    {
        if ($collection !== 'devices') {
            // We only use include for devices.
            return '';
        }
        $include = '';
        $valid_includes = response_valid_includes();
        if (!empty($get)) {
            $include = $get;
        }
        if (!empty($post)) {
            $include = $post;
        }
        $include = explode(',', $include);
        foreach ($include as $key => $value) {
            if (!empty($value)) {
                if (!in_array($value, $valid_includes)) {
                    log_message('warning', 'Invalid include provided (' . $value . ').');
                    unset($include[$key]);
                }
            }
        }
        $include = implode(',', $include);
        log_message('debug', 'Set include to ' . $include . '.');
        return $include;
    }
}

if (!function_exists('response_get_org_list')) {
    /**
     * Return the Org IDs list for the given collection for a supplied user
     * @param  object  $user          The requesting user must contain an org_list comma separated string
     * @param  string  $collection    The requested collection
     */
    function response_get_org_list(?stdClass $user = null, string $collection = ''): string
    {
        $org_list = array();
        $orgsModel = new \App\Models\OrgsModel();
        $orgs = $orgsModel->listAll();
        if (empty($collection) or empty($user)) {
            log_message('error', 'Either no collection or no user supplied.');
            return '';
        }
        $user_orgs = is_array($user->orgs) ? $user->orgs : explode(',', (string) $user->orgs);
        $collections = new \Config\Collections();
        $org_rule = $collections->{$collection}->orgs ?? '';
        switch ($org_rule) {
            case 'd':
                $org_list = array_unique(array_merge($user_orgs, $orgsModel->getUserDescendants($user_orgs, $orgs)));
                log_message('debug', "Org list for user '{$user->id}' and collection '{$collection}' using rule '{$org_rule}': " . implode(',', $org_list));
                break;

            case 'u':
                $org_list = $user_orgs;
                log_message('debug', "Org list for user '{$user->id}' and collection '{$collection}' using rule '{$org_rule}': " . implode(',', $org_list));
                break;

            case 'b':
                $org_list = array_merge($user_orgs, $orgsModel->getUserDescendants($user_orgs, $orgs));
                $org_list = array_merge($org_list, $orgsModel->getUserAscendants($user_orgs, $orgs));
                $org_list[] = 1;
                $org_list = array_unique($org_list);
                asort($org_list);
                log_message('debug', "Org list for user '{$user->id}' and collection '{$collection}' using rule '{$org_rule}': " . implode(',', $org_list));
                break;
        }
        if (empty($org_list)) {
            $org_list = $user_orgs;
        }
        $org_list = implode(',', $org_list);
        return $org_list;
    }
}

if (!function_exists('response_get_permission_id')) {
    /**
     * Can the $user perform this $action on item $id in this $collection
     * @param  object  $user          The requesting user must contain an org_array of intergers
     * @param  string  $collection    The requested collection
     * @param  string  $action        The requested action
     * @param  array   $received_data Any received data
     * @param  integer $id            Any received ID
     */
    function response_get_permission_id($user, $collection, $action, $received_data, $id)
    {
        $db = db_connect();
        $collections = array('auth', 'configuration', 'database', 'errors', 'help', 'logs', 'news', 'nmis', 'queue', 'roles');

        if (empty($id) or in_array($collection, $collections)) {
            log_message('debug', 'User permitted to access ' . $action . '::' . $collection);
            return true;
        }

        if ($collection === 'users' && $id === $user->id and in_array($action, ['read','update'])) {
            // Always allow a user to view their own user item
            return true;
        }

        // No Orgs for these
        if ($collection === 'benchmarks_policies') {
            return true;
        }

        if ($collection === 'standards_results') {
            $sql = "SELECT standards.org_id FROM standards_results LEFT JOIN standards ON (standards_results.standard_id = standards.id) WHERE standards_results.id = ?";
            $result = $db->query($sql, [$id])->getResult();
            if (empty($result) or count($result) === 0 or !in_array($result[0]->org_id, $user->org_array)) {
                return false;
            }
            return true;
        }

        if ($collection === 'orgs') {
            $sql = 'SELECT `orgs`.`id` AS org_id FROM orgs WHERE id = ?';
            $result = $db->query($sql, [$id])->getResult();
            if (count($result) === 0 or !in_array($result[0]->org_id, $user->org_array)) {
                return false;
            }
            return true;
        }

        // TODO - I don't think this EVER gets called. Check the lines prior to the calling function above.
        if ($collection === 'components') {
            if (!empty($received_data[0]->component_type)) {
                $component = $received_data[0]->component_type;
            } else {
                log_message('error', 'Calling a components ' . $action . ' on URL for components requires components.type=$TYPE in the URL');
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
            if (count($result) === 0 or !in_array($result[0]->org_id, $user->org_array)) {
                return false;
            }
            log_message('debug', 'User permitted to perform ' . $action . ' on ' . $collection . '::' . $id . '::' . $component);
            return true;
        }

        if ($collection === 'discovery_log') {
            $sql = "SELECT * FROM discovery_log WHERE id = ?";
            $result = $db->query($sql, [$id])->getResult();
            if (is_null($result[0]->discovery_id) and $action === 'read') {
                return true;
            }
            $sql = "SELECT discoveries.org_id FROM discoveries LEFT JOIN discovery_log ON (discoveries.id = discovery_log.discovery_id) WHERE discovery_log.id = ?";
            $result = $db->query($sql, [$id])->getResult();
        } else if (in_array($collection, response_valid_collections())) {
            $sql = "SELECT `{$collection}`.`org_id` AS org_id FROM `{$collection}` WHERE `id` = ?";
            $result = $db->query($sql, [$id])->getResult();
        } else if (!in_array($collection, response_valid_collections())) {
            $sql = "SELECT devices.org_id AS org_id FROM `{$collection}` LEFT JOIN devices ON {$collection}.device_id = devices.id WHERE {$collection}.id = ?";
            $result = $db->query($sql, [$id])->getResult();
        }

        if ($collection === 'collectors') {
            return true;
        }

        if (count($result) === 0) {
            \Config\Services::session()->setFlashdata('error', 'Requested item does not exist (' . $collection . '::' . intval($id) . ').');
            return false;
        }
        if (!in_array($result[0]->org_id, $user->org_array)) {
            \Config\Services::session()->setFlashdata('error', 'Requested item belongs to an Org this user has no permission on.');
            return false;
        }

        // check (if we're supplying data) that the OrgID is one we are allowed to supply
        if ($action === 'create' or $action === 'update' or $action === 'import' or $action === 'delete') {
            // org_id
            if (!empty($received_data->org_id)) {
                $allowed = false;
                foreach ($user->org_array as $key => $value) {
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
                foreach ($user->org_array as $key => $value) {
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
     * Accept a list of properties (or nothing) and return a validated list of fully qualified table.column properties in a comma separated string
     * @param  string $collection   The request collection
     * @param  string $action       The request action
     * @param  string $get          A comma separeted list of properties
     * @param  string $post         A comma separeted list of properties
     * @param  object $user         The user making this request
     * @return string               A comma separeted list of validated properties
     *
     */
    function response_get_properties($collection = '', $action = '', $get = '', $post = '', $user = null)
    {
        $db = db_connect();
        $properties = '';
        $summary = '';

        if (function_exists('get_instance')) {
            $instance = & get_instance();
        } else {
            $instance = new stdClass();
            $instance->config = config('Openaudit');
        }

        if (!empty($get)) {
            $properties = $get;
            $summary = "Set properties according to GET.";
            // Allow for format of properties=["id", "name", "status"]
            if ($temp = json_decode($properties)) {
                $summary = "Set properties according to GET JSON.";
                $properties = implode(',', $temp);
            }
            if ($collection === 'devices' and $action === 'collection') {
                // Special case this and populate the users columns so they'll apply on the devicesCollection template
                $user->devices_default_display_columns = $properties;
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
        if ($collection === 'devices' and $action === 'collection' and ($properties === 'default' or $properties === '')) {
                $summary = 'Set properties to default because neither user nor config are set.';
                $properties = 'devices.id,devices.uuid,devices.name,devices.ip,devices.hostname,devices.dns_hostname,devices.domain,devices.dns_domain,devices.dbus_identifier,devices.fqdn,devices.dns_fqdn,devices.description,devices.type,devices.icon,devices.os_group,devices.os_family,devices.os_name,devices.os_version,devices.manufacturer,devices.model,devices.serial,devices.form_factor,devices.status,devices.environment,devices.class,devices.function,devices.org_id,devices.location_id,devices.snmp_oid,devices.sysDescr,devices.sysObjectID,devices.sysUpTime,devices.sysContact,devices.sysName,devices.sysLocation,devices.first_seen,devices.last_seen,devices.last_seen_by,devices.identification';
            if (!empty($instance->config->devices_default_retrieve_columns)) {
                $summary = 'Set properties to config DEFAULT.';
                $properties = $instance->config->devices_default_retrieve_columns;
            }
        }
        if ($properties === 'all' or $properties === '*') {
            $properties = $collection . '.' . implode(',' . $collection . '.', $db->getFieldNames($collection));
            $summary = 'Set properties to TABLE ALL.';
        }
        if (!empty($properties)) {
            // Validate the properties are database columns
            $properties = explode(',', $properties);
            for ($i = 0; $i < count($properties); $i++) {
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
                    } else {
                        $properties[$i] = $collection . '.' . $properties[$i];
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
        // if (!empty($properties)) {
        //     log_message('debug', $summary . ' (' . $properties . ')');
        // }
        return $properties;
    }
}

if (!function_exists('response_get_sort')) {
    /**
     * Determine the requested sort by parsing a comma-separated string of properties,
     * validating them, and returning a string in SQL format.
     *
     * @param  string $collection The request collection
     * @param  string $get        The GET sort variable
     * @return string             A string of properties, in SQL format
     */
    function response_get_sort(string $collection = '', string $get = ''): string
    {
        $db = db_connect();
        $sort = '';
        $sorted = [];

        $get = str_replace('+', '', $get);

        if (!empty($get)) {
            $properties = array_map('trim', explode(',', $get));

            foreach ($properties as $property) {
                $direction = 'ASC';
                $field = $property;

                if (str_starts_with($field, '-')) {
                    $field = substr($field, 1);
                    $direction = 'DESC';
                }

                if (strpos($field, '.') !== false) {
                    [$table, $column] = explode('.', $field, 2);
                } else {
                    $table = $collection;
                    $column = $field;
                }

                if (!empty($table) && !empty($column) && $db->tableExists($table) and $db->fieldExists($column, $table)) {
                    $sorted[] = "{$table}.{$column}" . ($direction === 'DESC' ? ' DESC' : '');
                } else {
                    log_message('warning', "Invalid sort attribute supplied for {$collection} ({$property}), removed.");
                }
            }

            $sort = implode(', ', $sorted);
        }

        if (!empty($sort)) {
            log_message('debug', "Sort set to: {$sort}.");
        }

        return $sort;
    }
}


if (!function_exists('response_valid_actions')) {
    /**
     * Returns an array of valid action identifiers used in the application.
     *
     * These actions may correspond to API endpoints, UI operations, or internal logic.
     *
     * @return array List of valid action names.
     */
    function response_valid_actions(): array
    {
        return ['bulk_update_form', 'collection', 'create', 'create_form', 'debug', 'defaults', 'delete', 'delete_form', 'dictionary', 'download', 'example', 'example_form', 'execute', 'export', 'export_form', 'help', 'import', 'importform', 'importjson', 'importjsonform', 'importnmisform', 'importnmis', 'read', 'reset', 'resetForm', 'test', 'update'];
    }
}

if (!function_exists('response_valid_collections')) {
    /**
     * Returns an array of valid collection names used in the application.
     *
     * These collection names correspond to API endpoints.
     *
     * @return array List of valid collection names.
     */
    function response_valid_collections()
    {
        $collections = new \Config\Collections();
        $return = array();
        foreach ($collections as $collection => $value) {
            $return[] = $collection;
        }
        return $return;
    }
}

if (!function_exists('response_valid_formats')) {
    /**
     * Returns an array of valid response formats for API output.
     *
     * These formats determine how data is structured and returned to the client.
     *
     * @return array List of supported response format identifiers.
     */
    function response_valid_formats(): array
    {
        return ['csv','highcharts','html','html_data','json','json_data','report','sql','table','xml'];
    }
}

if (!function_exists('response_valid_includes')) {
    /**
     * Returns an array of valid include keys for resource expansion in API responses.
     *
     * These keys represent related entities that can be optionally included
     * when querying a resource.
     *
     * @return array List of valid include keys.
     */
    function response_valid_includes(): array
    {
        return ['application', 'arp', 'attachment', 'audit_log', 'bios', 'certificate', 'change_log', 'cluster', 'credential', 'discovery_log', 'disk', 'dns', 'edit_log', 'executable', 'field', 'file', 'image', 'ip', 'location', 'license', 'log', 'memory', 'module', 'monitor', 'motherboard', 'netstat', 'network', 'nmap', 'optical', 'pagefile', 'partition', 'policy', 'print_queue', 'processor', 'purchase', 'rack_devices', 'radio', 'route', 'san', 'scsi', 'server', 'server_item', 'service', 'share', 'software', 'software_key', 'sound', 'task', 'usb', 'user', 'user_group', 'variable', 'video', 'vm', 'windows'];
    }
}

if (!function_exists('response_valid_permissions')) {
    /**
     * Returns an array mapping resource actions to permission codes.
     *
     * Permission codes:
     * - 'r' = read
     * - 'u' = update
     * - 'c' = create
     * - 'd' = delete
     *
     * @param string $collection (Currently unused) Reserved for future logic based on collection type.
     * @return array Associative array of resource => permission code.
     */
    function response_valid_permissions($collection): array
    {
        $permission = [];
        $permission['about'] = 'r';
        $permission['bulkupdate'] = 'u';
        $permission['bulkupdateform'] = 'u';
        $permission['collection'] = 'r';
        $permission['compare'] = 'r';
        $permission['create'] = 'c';
        $permission['createform'] = 'c';
        $permission['defaults'] = 'r';
        $permission['delete'] = 'd';
        $permission['deleteform'] = 'd';
        $permission['dictionary'] = 'r';
        $permission['download'] = 'r';
        $permission['example'] = 'c';
        $permission['exampleform'] = 'c';
        $permission['execute'] = 'u';
        $permission['executeform'] = 'u';
        $permission['executecollector'] = 'u';
        $permission['export'] = 'r';
        $permission['features'] = 'r';
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
     * Returns an array of valid sub-resources for device-related operations.
     *
     * These sub-resources are used to validate or filter API responses related to devices.
     *
     * @return array List of valid sub-resource names.
     */
    function response_valid_sub_resources(): array
    {
        return ['application', 'arp', 'attachment', 'audit_log', 'bios', 'certificate', 'change_log', 'cluster', 'credential', 'discovery', 'discovery_log', 'disk', 'dns', 'edit_log', 'executable', 'field', 'image', 'ip', 'license', 'log', 'memory', 'module', 'monitor', 'motherboard', 'netstat', 'network', 'nmap', 'optical', 'pagefile', 'partition', 'policy', 'print_queue', 'processor', 'radio', 'route', 'scsi', 'server', 'server_item', 'service', 'share', 'software', 'software_key', 'sound', 'task', 'usb', 'user', 'user_group', 'variable', 'video', 'vm', 'windows', 'report', 'query', 'group'];
    }
}

if (!function_exists('valid_reserved_words')) {
    /**
     * Returns an array of reserved words that should not be used as URL parameters or resource identifiers.
     *
     * These words are typically used by the system for routing, filtering, or formatting and may conflict with user-defined values.
     *
     * @return array List of reserved URL keywords.
     */
    function response_valid_reserved_words(): array
    {
        return ['action', 'as_at', 'current', 'debug', 'format', 'groupby', 'ids', 'include', 'limit', 'offset', 'properties', 'query', 'report_name', 'search', 'sort'];
    }
}
// End of file response_helper.php
// Location: ./helpers/response_helper.php
