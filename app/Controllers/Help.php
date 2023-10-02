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
            $license_contents = @file_get_contents(APPPATH . '../other/licenses/' . $license . '.txt');
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
