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
    protected $helpers = ['components', 'device', 'network', 'output', 'response', 'utility', 'security'];

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

        // Preload any models, libraries, etc, here.
        $this->session = \Config\Services::session();
        $this->config = new \Config\OpenAudit();
        $this->config->oae_product = 'professional';

        $this->config->enterprise_collections = array('applications' => 'cud', 'baselines' => 'crud', 'baselines_policies' => 'crud', 'baselines_results' => 'crud', 'clouds' => 'crud', 'collectors' => 'crud', 'dashboards' => 'cud', 'discovery_scan_options' => 'cud', 'files' => 'crud', 'integrations' => 'crud', 'racks' => 'crud', 'roles' => 'cu');

        $this->config->professional_collections = array('applications' => 'r', 'clusters' => 'crud', 'dashboards' => 'r', 'discovery_scan_options' => 'r', 'maps' => 'crud', 'rules' => 'crud', 'summaries' => 'crud', 'widgets' => 'crud');

        $this->config->homepage = 'orgsCollection';

        $this->usersModel = new \App\Models\UsersModel();
        $this->user = $this->usersModel->userValidate();
        $this->orgsModel = new \App\Models\OrgsModel();
        $this->orgs = $this->orgsModel->listAll();
        $this->queriesModel = new \App\Models\QueriesModel();
        $this->rolesModel = new \App\Models\RolesModel();
        $this->roles = $this->rolesModel->listAll();
        $this->collections = collections_list();

        $this->queries = array();

        $router = \Config\Services::router();
        $this->controller = $router->controllerName();
        $this->method = $router->methodName();

        if (empty($this->user) and $this->controller === '\App\Controllers\Input') {
            // We are receiving input from an audit result, no need for $user, et al.
            return;
        }
        if (empty($this->user) and $this->controller === '\App\Controllers\Queue' and $this->method === 'start') {
            // We are starting the queue, no need for $user, et al.
            return;
        }

        // Map the user to roles to collections
        $userRoles = array();
        foreach ($this->user->roles as $userRole) {
            foreach ($this->roles as $role) {
                if ($userRole === $role->name) {
                    $permissions = json_decode($role->permissions);
                    foreach ($permissions as $key => $value) {
                        if (empty($userRoles[$key])) {
                            $userRoles[$key] = $value;
                        } else {
                            if (strpos($userRoles[$key], $value) === false) {
                                $userRoles[$key] = $userRoles[$key] . $value;
                            }
                        }
                    }
                }
            }
        }
        $this->user->permissions = $userRoles;
        if (empty($this->user->permissions['components'])) {
            $this->user->permissions['components'] = $this->user->permissions['devices'];
        }
        if (empty($this->user->permissions['discovery_log'])) {
            $this->user->permissions['discovery_log'] = $this->user->permissions['discoveries'];
        }
        if (empty($this->user->permissions['rack_devices'])) {
            $this->user->permissions['rack_devices'] = $this->user->permissions['racks'];
        }

        // Setup our request hash (meta, data, errors, included, et al)
        $this->resp = response_create($this);

        $message = 'ACCESS:' . strtolower($this->resp->meta->collection) . ':' . strtolower($this->resp->meta->action) . ':' . $this->resp->meta->id . ':' . $this->user->full_name;
        if (!empty($this->resp->meta->received_data)) {
            $data = json_encode($this->resp->meta->received_data);
            if ($this->resp->meta->collection === 'credentials' or $this->resp->meta->collection === 'clouds') {
                $data = json_decode($data);
                $data->attributes->credentials = 'Removed for logging';
                $data = json_encode($data);
            }
            if ($this->resp->meta->collection === 'integrations') {
                $data = json_decode($data);
                $data->attributes->attributes = 'Removed for logging';
                $data = json_encode($data);
            }
            if ($this->resp->meta->collection === 'users') {
                $data = json_decode($data);
                $data->attributes->password = 'Removed for logging';
                $data = json_encode($data);
            }
            $message .= ':' . $data;
        }
        log_message('info', $message);

        // The dictionary items
        $this->dictionary = new \stdClass();
        $this->dictionary->link = 'For more detailed information, check the Open-AudIT <a href="https://community.opmantek.com/display/OA/' . @$this->resp->meta->collection . '">Knowledge Base</a>.';
        $this->dictionary->id = 'The identifier column (integer) in the database (read only).';
        $this->dictionary->name = 'The name given to this item. Ideally it should be unique.';
        $this->dictionary->org_id = 'The Organisation that owns this item. Links to <code>orgs.id</code>.';
        $this->dictionary->description = 'Your description of this item.';
        $this->dictionary->options = 'A JSON object containing collection specific options.';
        $this->dictionary->edited_by = 'The name of the user who last changed or added this item (read only).';
        $this->dictionary->edited_date = 'The date this item was changed or added (read only). NOTE - This is the timestamp from the server.';
        $this->dictionary->system_id = 'The id of the linked device. Links to <code>system.id</code>';

        // Load our $this->{$collection}Model
        $collection = ucfirst($this->resp->meta->collection);
        if (strpos($collection, '_') !== false) {
            $collection = str_replace('_', ' ', $collection);
            $collection = ucwords($collection);
            $collection = str_replace(' ', '', $collection);
        }
        $namespace = "\\App\\Models\\" . $collection . "Model";
        $this->{strtolower($this->resp->meta->collection) . "Model"} = new $namespace;

        if ($this->resp->meta->format === 'screen') {
            $this->resp->meta->icon = $this->collections->{$this->resp->meta->collection}->icon;
            $this->queriesUser = $this->queriesModel->listUser();
            $this->orgsUser = $this->orgsModel->listUser($this->user);
            $this->dashboardsModel = new \App\Models\DashboardsModel();
            $this->dashboards = $this->dashboardsModel->listUser();
        }
    }
}
