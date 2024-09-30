<?php

# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\CLIRequest;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;
use stdClass;

#[\AllowDynamicProperties]

/**
 * Class BaseController
 *
 * BaseController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 * Extend this class in any new controllers:
 *     class Home extends BaseController
 *
 * For security be sure to declare any new methods as protected or private.
 */
abstract class BaseController extends Controller
{
    /**
     * Instance of the main Request object.
     *
     * @var CLIRequest|IncomingRequest
     */
    protected $request;

    /**
     * An array of helpers to be loaded automatically upon
     * class instantiation. These helpers will be available
     * to all other controllers that extend BaseController.
     *
     * @var array
     */
    protected $helpers = ['components', 'device', 'network', 'output', 'response', 'scripts', 'security', 'utility'];

    public $response;

    /**
     * Constructor.
     */
    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {

        // Do Not Edit This Line
        parent::initController($request, $response, $logger);

        // Register the instance so we can call it from models, et al.
        register_ci_instance($this);

        $this->response->setHeader('X-Content-Type-Options', 'nosniff');

        $router = \Config\Services::router();
        $this->controller = $router->controllerName();
        $this->method = $router->methodName();
        // log_message('debug', 'Controller: ' . $this->controller);
        // log_message('debug', 'Method: ' . $this->method);

        // Preload any models, libraries, etc, here.
        $this->session = session();

        $this->config = new \Config\OpenAudit();

        $this->config->homepage = 'summaries';

        $this->devicesModel = model('App\Models\DevicesModel');
        $this->networksModel = model('App\Models\NetworksModel');
        $this->orgsModel = model('App\Models\OrgsModel');
        $this->queriesModel = model('App\Models\QueriesModel');
        $this->reportsModel = model('App\Models\ReportsModel');
        $this->rolesModel = model('App\Models\RolesModel');
        $this->summariesModel = model('App\Models\SummariesModel');
        $this->usersModel = model('App\Models\UsersModel');

        $this->roles = $this->rolesModel->listAll();
        $this->collections = new \Config\Collections();

        if (!defined('CHARSET')) {
            define('CHARSET', 'UTF-8');
            define('REPLACE_FLAGS', ENT_COMPAT | ENT_XHTML);
        }

        if ($this->config->internal_version > 20230614) {
            $this->orgs = $this->orgsModel->listAll();
        }

        $this->queries = array();

        if (empty($this->user) and $this->controller === '\App\Controllers\Input') {
            // We are receiving input from an audit result, no need for $user, et al.
            return;
        }
        if (empty($this->user) and $this->controller === '\App\Controllers\Queue' and $this->method === 'start') {
            // We are starting the queue, no need for $user, et al.
            return;
        }
        if (empty($this->user) and $this->controller === '\App\Controllers\Scripts' and $this->method === 'download') {
            // Anyone can download a script
            return;
        }
        if (empty($this->user) and $this->controller === '\App\Controllers\Agents' and ($this->method === 'download' or $this->method === 'execute')) {
            // Anyone can download an agent
            return;
        }

        $this->user = $this->usersModel->userValidate();

        if ((int)$this->config->internal_version < $this->config->appVersion) {
            if ($router->controllerName() !== '\App\Controllers\Database' and $router->methodName() !== 'update') {
                header('Location: ' . url_to('databaseUpdate'));
                exit;
            }
            return;
        }

        # Parse the input and create our response
        $this->resp = response_create($this);

        $this->licenses = new stdClass();
        if (!empty($this->resp->meta->licenses)) {
            $this->licenses = $this->resp->meta->licenses;
            unset($this->resp->meta->licenses);
            $this->config->device_license = 0;
            if (!empty($this->licenses->count)) {
                $this->config->device_license = intval($this->licenses->count);
            }
        }
        $this->licenses_collector = new stdClass();
        if (!empty($this->resp->meta->licenses_collector)) {
            $this->licenses_collector = $this->resp->meta->licenses_collector;
            unset($this->resp->meta->licenses_collector);
        }

        # log this request
        $log_user = (!empty($this->user->full_name)) ? $this->user->full_name : $this->user->name;
        $message = 'ACCESS:' . strtolower($this->resp->meta->collection) . ':' . strtolower($this->resp->meta->action) . ':' . $this->resp->meta->id . ':' . $log_user;
        if ($this->resp->meta->collection === 'integrations' and empty($this->resp->meta->received_data) and $this->resp->meta->action === 'update') {
            $this->resp->meta->received_data = $this->resp->meta->filter;
        }
        if (!empty($this->resp->meta->received_data)) {
            $data = json_encode($this->resp->meta->received_data);
            if ($this->resp->meta->collection === 'credentials' or $this->resp->meta->collection === 'clouds' or $this->resp->meta->collection === 'components') {
                try {
                    $data = json_decode($data, false, 512, JSON_THROW_ON_ERROR);
                } catch (\JsonException $e) {
                    log_message('error', 'Could not decode JSON. File:' . basename(__FILE__) . ', Line:' . __LINE__ . ', Error: ' . $e->getMessage());
                }
                if (!empty($data->attributes->credentials)) {
                    $data->attributes->credentials = 'Removed for logging';
                }
                $data = json_encode($data);
            }
            if ($this->resp->meta->collection === 'integrations') {
                try {
                    $data = json_decode($data, false, 512, JSON_THROW_ON_ERROR);
                } catch (\JsonException $e) {
                    log_message('error', 'Could not decode JSON. File:' . basename(__FILE__) . ', Line:' . __LINE__ . ', Error: ' . $e->getMessage());
                }
                if (!empty($data->attributes->attributes)) {
                    $data->attributes->attributes = 'Removed for logging';
                }
                $data = json_encode($data);
            }
            if ($this->resp->meta->collection === 'users') {
                try {
                    $data = json_decode($data, false, 512, JSON_THROW_ON_ERROR);
                } catch (\JsonException $e) {
                    log_message('error', 'Could not decode JSON. File:' . basename(__FILE__) . ', Line:' . __LINE__ . ', Error: ' . $e->getMessage());
                }
                if (!empty($data->attributes->password)) {
                    $data->attributes->password = 'Removed for logging';
                }
                $data = json_encode($data);
            }
            $message .= ':' . $data;
        }
        if ($message !== '') {
            log_message('info', $message);
        }

        // The dictionary items
        $this->dictionary = new stdClass();
        $this->dictionary->link = '';
        if (!empty($this->resp->meta->collection)) {
            $this->dictionary->link = 'For more detailed information, check the Open-AudIT <a href="' . url_to($this->resp->meta->collection . 'Help') . '">Knowledge Base</a>.';
        }
        $this->dictionary->id = 'The identifier column (integer) in the database (read only).';
        $this->dictionary->name = 'The name given to this item. Ideally it should be unique.';
        $this->dictionary->org_id = 'The Organisation that owns this item. Links to <code>orgs.id</code>.';
        $this->dictionary->description = 'Your description of this item.';
        $this->dictionary->options = 'A JSON object containing collection specific options.';
        $this->dictionary->edited_by = 'The name of the user who last changed or added this item (read only).';
        $this->dictionary->edited_date = 'The date this item was changed or added (read only). NOTE - This is the timestamp from the server.';
        $this->dictionary->device_id = 'The id of the linked device. Links to <code>devices.id</code>';

        // Load our $this->{$collection}Model
        $collection = ucfirst($this->resp->meta->collection);
        if (strpos($collection, '_') !== false) {
            $collection = str_replace('_', ' ', $collection);
            $collection = ucwords($collection);
            $collection = str_replace(' ', '', $collection);
        }
        $namespace = "\\App\\Models\\" . $collection . "Model";
        $this->{strtolower($this->resp->meta->collection) . "Model"} = new $namespace();

        $this->resp->meta->icon = $this->collections->{strtolower($this->resp->meta->collection)}->icon;

        if ($this->resp->meta->format === 'html') {
            $GLOBALS['table'] = '';
            $GLOBALS['button'] = 'btn-sm';
            if (!empty($this->user->list_table_format) and $this->user->list_table_format === 'compact') {
                $GLOBALS['table'] = 'table-sm';
                $GLOBALS['button'] = 'btn-xs';
            }
            $this->queriesUser = $this->queriesModel->listUser();
            $this->queriesUser = array_merge($this->queriesUser, $this->reportsModel->listUser());
            $this->queriesUser = array_merge($this->queriesUser, $this->summariesModel->listUser());
            $this->orgsUser = $this->orgsModel->listUser();
            $this->dashboardsModel = model('App\Models\DashboardsModel');
            $this->dashboards = $this->dashboardsModel->listUser();
        }

        if (
            $this->resp->meta->format === 'html' and
            $this->resp->meta->action !== 'help' and
            $this->resp->meta->action !== 'dictionary' and
            $this->resp->meta->action !== 'defaults'
        ) {
            $action = $this->resp->meta->permission_requested[$this->resp->meta->action];

            if (strpos($this->collections->{$this->resp->meta->collection}->actions->{$this->config->product}, $this->resp->meta->permission_requested[$this->resp->meta->action]) === false) {
                log_message('error', $this->resp->meta->collection . '::' . $this->resp->meta->action . ' not permitted with a ' . $this->config->product . ' license.');
                \Config\Services::session()->setFlashdata('error', $this->resp->meta->collection . '::' . $this->resp->meta->action . ' is limited to ' . $this->collections->{$this->resp->meta->collection}->edition . ' licenses. Please contact <a href="https://firstwave.com" target="_blank">FirstWave</a> for a license.');
                header('Location: ' . url_to($this->resp->meta->collection . 'Help'));
                exit();
            }
        }
    }
}
