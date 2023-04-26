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
    protected $helpers = ['log', 'output', 'response', 'utility', 'security'];

    public $response;

    /**
     * Constructor.
     */
    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        // Do Not Edit This Line
        parent::initController($request, $response, $logger);
        register_ci_instance($this);

        // echo "<pre>";
        // print_r($response);
        // exit;

        // Preload any models, libraries, etc, here.
        $this->session = \Config\Services::session();
        $this->config = new \Config\OpenAudit();
        $this->usersModel = new \App\Models\UsersModel();
        $this->user = $this->usersModel->userValidate();
        $this->orgsModel = new \App\Models\OrgsModel();
        $this->orgs = $this->orgsModel->listAll();
        $this->queriesModel = new \App\Models\QueriesModel();
        $this->rolesModel = new \App\Models\RolesModel();
        $this->roles = $this->rolesModel->listAll();
        $this->collections = collections_list();
        #$this->dictionaryModel = new \App\Models\DictionaryModel();
        #$this->dictionary = new \stdClass();

        $this->queries = array();

        $router = \Config\Services::router();
        $this->controller = $router->controllerName();
        $this->method = $router->methodName();

        #echo "<pre>\n"; print_r($this->user->orgs);

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
        // echo "<pre>\n"; echo json_encode($this->user); exit;

        // Setup our request hash (meta, data, errors, included, et al)
        $this->resp = response_create($this);
        // echo "<pre>\n"; echo json_encode($this->resp); exit;

        // Load our $this->{$collection}Model
        $namespace = "\\App\\Models\\" . ucfirst($this->resp->meta->collection) . "Model";
        $this->{strtolower($this->resp->meta->collection) . "Model"} = new $namespace;

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


        if ($this->resp->meta->format === 'screen') {
            $this->resp->meta->icon = $this->collections->{$this->resp->meta->collection}->icon;
            $this->queriesUser = $this->queriesModel->listUser();
            $this->orgsUser = $this->orgsModel->listUser($this->user);
        }
    }
}