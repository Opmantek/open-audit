<?php

# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

namespace App\Controllers;

use stdClass;
use CodeIgniter\Controller;
use CodeIgniter\HTTP\CLIRequest;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;
use CodeIgniter\Model;

/**
 * PHP version 7.4
 *
 * @category  Controller
 * @package   Open-AudIT\Controller
 * @author    Mark Unwin <mark.unwin@firstwave.com>
 * @copyright 2023 FirstWave
 * @license   http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 * @version   GIT: Open-AudIT_5.6.0
 * @link      http://www.open-audit.org
 */

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
class Help extends BaseController
{
    /**
     * The About page
     *
     * @access public
     * @return NULL
     */
    public function about()
    {
        return view('shared/header', [
            'config' => $this->config,
            'dashboards' => filter_response($this->dashboards),
            'meta' => filter_response($this->resp->meta),
            'orgs' => filter_response($this->orgsUser),
            'queries' => filter_response($this->queriesUser),
            'roles' => filter_response($this->roles),
            'user' => filter_response($this->user)]) .
            view('helpAbout', [])
            . view('shared/footer', ['license_string' => $this->resp->meta->license_string]);
    }

    /**
     * The API documentation page
     *
     * @access public
     * @return NULL
     */
    public function api()
    {
        return view('shared/header', [
            'config' => $this->config,
            'dashboards' => filter_response($this->dashboards),
            'meta' => filter_response($this->resp->meta),
            'orgs' => filter_response($this->orgsUser),
            'queries' => filter_response($this->queriesUser),
            'roles' => filter_response($this->roles),
            'user' => filter_response($this->user)]) .
            view('helpApi', [])
            . view('shared/footer', ['license_string' => $this->resp->meta->license_string]);
    }

    /**
     * The Welcome page
     *
     * @access public
     * @return NULL
     */
    public function collector()
    {
        if (empty($this->config->servers)) {
            return redirect()->route('home');
        }
        $tasksModel = new \App\Models\TasksModel();
        $tasks = $tasksModel->listAll();
        foreach ($tasks as $task) {
            if ($task->type === 'collector') {
                $this->resp->data[] = $task;
            }
        }
        $configurationModel = new \App\Models\ConfigurationModel();
        $configuration = $configurationModel->listAll();
        foreach ($configuration as $item) {
            if ($item->name === 'servers') {
                $this->resp->meta->id = intval($item->id);
                try {
                    $temp = json_decode($item->value, false, 512, JSON_THROW_ON_ERROR);
                } catch (\JsonException $e) {
                    log_message('error', 'Could not decode JSON. File:' . basename(__FILE__) . ', Line:' . __LINE__ . ', Error: ' . $e->getMessage());
                    $temp = array();
                }
                $this->resp->included = format_data($temp, 'servers');
            }
        }
        $this->resp->meta->collection = 'configuration';
        return view('shared/header', [
            'config' => $this->config,
            'dashboards' => filter_response($this->dashboards),
            'data' => filter_response($this->resp->data),
            'included' => filter_response($this->resp->included),
            'meta' => filter_response($this->resp->meta),
            'orgs' => filter_response($this->orgsUser),
            'queries' => filter_response($this->queriesUser),
            'roles' => filter_response($this->roles),
            'user' => filter_response($this->user)]) .
            view('dashboardsCollector', [])
            . view('shared/footer', ['license_string' => $this->resp->meta->license_string]);
    }

    /**
     * The Features page
     *
     * @access public
     * @return NULL
     */
    public function discoveryIssues()
    {
        return view('shared/header', [
            'config' => $this->config,
            'dashboards' => filter_response($this->dashboards),
            'meta' => filter_response($this->resp->meta),
            'orgs' => filter_response($this->orgsUser),
            'queries' => filter_response($this->queriesUser),
            'roles' => filter_response($this->roles),
            'user' => filter_response($this->user)]) .
            view('helpDiscoveryIssues', [])
            . view('shared/footer', ['license_string' => $this->resp->meta->license_string]);
    }

    /**
     * The FAQ pages
     *
     * @access public
     * @return NULL
     */
    public function faq()
    {
        #$request = \Config\Services::request();
        $name = $this->request->getGet('name');
        $valid_names = array('Bulk Editing Device Attributes', 'Creating a Query', 'Credentials for Amazon AWS used in Cloud Discovery', 'Credentials for Microsoft Azure used in Cloud Discovery', 'FAQ', 'Google Maps API Key', 'Running Open-AudIT Apache Service Under Windows', 'Troubleshooting LDAP Logins');
        if (!in_array($name, $valid_names)) {
            redirect('home');
        }
        return view('shared/header', [
            'config' => $this->config,
            'dashboards' => filter_response($this->dashboards),
            'meta' => filter_response($this->resp->meta),
            'orgs' => filter_response($this->orgsUser),
            'queries' => filter_response($this->queriesUser),
            'roles' => filter_response($this->roles),
            'user' => filter_response($this->user)]) .
            view('helpFAQ', ['name' => $name])
            . view('shared/footer', ['license_string' => $this->resp->meta->license_string]);
    }

    /**
     * The Features page
     *
     * @access public
     * @return NULL
     */
    public function features()
    {
        return view('shared/header', [
            'config' => $this->config,
            'dashboards' => filter_response($this->dashboards),
            'meta' => filter_response($this->resp->meta),
            'orgs' => filter_response($this->orgsUser),
            'queries' => filter_response($this->queriesUser),
            'roles' => filter_response($this->roles),
            'user' => filter_response($this->user)]) .
            view('helpFeatures', [])
            . view('shared/footer', ['license_string' => $this->resp->meta->license_string]);
    }

    /**
     * The Welcome page
     *
     * @access public
     * @return NULL
     */
    public function gettingStarted()
    {
        return view('shared/header', [
            'config' => $this->config,
            'dashboards' => filter_response($this->dashboards),
            'meta' => filter_response($this->resp->meta),
            'orgs' => filter_response($this->orgsUser),
            'queries' => filter_response($this->queriesUser),
            'roles' => filter_response($this->roles),
            'user' => filter_response($this->user)]) .
            view('helpGettingStarted', [])
            . view('shared/footer', ['license_string' => $this->resp->meta->license_string]);
    }

    /**
     * The Licenses page
     *
     * @access public
     * @return NULL
     */
    public function licenses()
    {
        $license = (!empty($_GET['license'])) ? $_GET['license'] : '';
        $license_contents = '';
        if (!empty($license)) {
            $license_contents = @file_get_contents(ROOTPATH . 'other/licenses/' . $license . '.txt');
        }
        return view('shared/header', [
            'config' => $this->config,
            'dashboards' => filter_response($this->dashboards),
            'meta' => filter_response($this->resp->meta),
            'orgs' => filter_response($this->orgsUser),
            'queries' => filter_response($this->queriesUser),
            'roles' => filter_response($this->roles),
            'user' => filter_response($this->user)]) .
            view('helpLicenses', ['license' => $license, 'license_contents' => $license_contents])
            . view('shared/footer', ['license_string' => $this->resp->meta->license_string]);
    }

    /**
     * The Features page
     *
     * @access public
     * @return NULL
     */
    public function prereq()
    {
        return view('shared/header', [
            'config' => $this->config,
            'dashboards' => filter_response($this->dashboards),
            'meta' => filter_response($this->resp->meta),
            'orgs' => filter_response($this->orgsUser),
            'queries' => filter_response($this->queriesUser),
            'roles' => filter_response($this->roles),
            'user' => filter_response($this->user)]) .
            view('helpPrereq', [])
            . view('shared/footer', ['license_string' => $this->resp->meta->license_string]);
    }

    /**
     * The Welcome page
     *
     * @access public
     * @return NULL
     */
    public function welcome()
    {
        return view('shared/header', [
            'config' => $this->config,
            'dashboards' => filter_response($this->dashboards),
            'meta' => filter_response($this->resp->meta),
            'orgs' => filter_response($this->orgsUser),
            'queries' => filter_response($this->queriesUser),
            'roles' => filter_response($this->roles),
            'user' => filter_response($this->user)]) .
            view('helpWelcome', [])
            . view('shared/footer', ['license_string' => $this->resp->meta->license_string]);
    }
}
