<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

namespace App\Controllers;

use \stdClass;

/**
 * PHP version 7.4
 *
 * @category  Controller
 * @package   Open-AudIT\Controller
 * @author    Mark Unwin <mark.unwin@firstwave.com>
 * @copyright 2023 FirstWave
 * @license   http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 * @version   GIT: Open-AudIT_5.0.0
 * @link      http://www.open-audit.org
 */

use CodeIgniter\Controller;
use CodeIgniter\HTTP\CLIRequest;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

use CodeIgniter\Model;

/**
 * Base Object Help
 *
 * @access   public
 * @category Object
 * @package  Open-AudIT\Controller\Test
 * @author   Mark Unwin <mark.unwin@firstwave.com>
 * @license  http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 * @link     http://www.open-audit.org
 */
class Help extends Controller
{
    /**
     * The About page
     *
     * @access public
     * @return NULL
     */
    public function about()
    {
        $this->config = new \Config\OpenAudit();
        helper('utility');
        helper('output');
        $this->usersModel = model('App\Models\UsersModel');
        $this->user = $this->usersModel->userValidate();
        $this->orgsModel = model('App\Models\OrgsModel');
        $this->queriesModel = model('App\Models\QueriesModel');
        $this->rolesModel = model('App\Models\RolesModel');
        $this->roles = $this->rolesModel->listAll();
        $this->collections = collections_list();
        $this->orgsUser = $this->orgsModel->listUser([], $this->user->orgs);
        $this->queriesUser = $this->queriesModel->listUser([], $this->user->orgs);
        $this->dashboardsModel = model('App\Models\DashboardsModel');
        $this->dashboards = $this->dashboardsModel->listUser([], $this->user->orgs);
        $this->resp = new stdClass();
        $this->resp->meta = new stdClass();
        $this->resp->meta->collection = 'help';
        $this->resp->meta->action = 'read';
        $this->resp->meta->id = 'About';
        return view('shared/header', [
            'config' => $this->config,
            'dashboards' => filter_response($this->dashboards),
            'meta' => filter_response($this->resp->meta),
            'orgs' => filter_response($this->orgsUser),
            'queries' => filter_response($this->queriesUser),
            'roles' => filter_response($this->roles),
            'user' => filter_response($this->user)]) .
            view('helpAbout', []);
    }

    /**
     * The Features page
     *
     * @access public
     * @return NULL
     */
    public function features()
    {
        $this->config = new \Config\OpenAudit();
        helper('utility');
        helper('output');
        $this->usersModel = model('App\Models\UsersModel');
        $this->user = $this->usersModel->userValidate();
        $this->orgsModel = model('App\Models\OrgsModel');
        $this->queriesModel = model('App\Models\QueriesModel');
        $this->rolesModel = model('App\Models\RolesModel');
        $this->roles = $this->rolesModel->listAll();
        $this->collections = collections_list();
        $this->orgsUser = $this->orgsModel->listUser([], $this->user->orgs);
        $this->queriesUser = $this->queriesModel->listUser([], $this->user->orgs);
        $this->dashboardsModel = model('App\Models\DashboardsModel');
        $this->dashboards = $this->dashboardsModel->listUser([], $this->user->orgs);
        $this->resp = new stdClass();
        $this->resp->meta = new stdClass();
        $this->resp->meta->collection = 'help';
        $this->resp->meta->action = 'read';
        $this->resp->meta->id = 'About';
        return view('shared/header', [
            'config' => $this->config,
            'dashboards' => filter_response($this->dashboards),
            'meta' => filter_response($this->resp->meta),
            'orgs' => filter_response($this->orgsUser),
            'queries' => filter_response($this->queriesUser),
            'roles' => filter_response($this->roles),
            'user' => filter_response($this->user)]) .
            view('helpFeatures', []);
    }
}
