<?php

# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

namespace App\Controllers;

use stdClass;

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
 * Base Object Reports
 *
 * @access   public
 * @category Object
 * @package  Open-AudIT\Controller\Reports
 * @author   Mark Unwin <mark.unwin@firstwave.com>
 * @license  http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 * @link     http://www.open-audit.org
 */
class Reports extends BaseController
{
    /**
     * Execute a report
     *
     * @access public
     * @return void
     */
    public function execute($id)
    {
        if (strpos($this->collections->{$this->resp->meta->collection}->actions->{$this->config->product}, $this->resp->meta->permission_requested[$this->resp->meta->action]) === false) {
            log_message('error', $this->resp->meta->collection . '::' . $this->resp->meta->action . ' not permitted with a ' . $this->config->product . ' license.');
            if ($this->resp->meta->format === 'html') {
                \Config\Services::session()->setFlashdata('error', $this->resp->meta->collection . '::' . $this->resp->meta->action . ' is limited to ' . $this->collections->{$this->resp->meta->collection}->edition . ' licenses. Please contact <a href="https://firstwave.com" target="_blank">FirstWave</a> for a license.');
                header('Location: ' . url_to($this->resp->meta->collection . 'Help'));
                exit();
            }
            $this->resp->meta->errors = $this->resp->meta->collection . '::' . $this->resp->meta->action . ' not permitted with a ' . $this->config->product . ' license.';
            output($this);
            exit();
        }
        $this->devicesModel = new \App\Models\DevicesModel();
        $id = intval($id);
        if (empty($id) or $id < 10000) {
            $_SESSION['warning'] = 'Invalid or no ID provided.';
            return redirect()->route('devicesCollection');
        }
        $this->resp->meta->breadcrumbs = array();
        $breadcrumb = new stdClass();
        $breadcrumb->url = url_to('reportsCollection');
        $breadcrumb->name = 'Reports';
        $this->resp->meta->breadcrumbs[] = $breadcrumb;

        $breadcrumb = new stdClass();
        $breadcrumb->url = url_to('reportsExecute', $this->resp->meta->id);
        $breadcrumb->name = (!empty($this->resp->meta->name)) ? $this->resp->meta->name : '';
        $this->resp->meta->breadcrumbs[] = $breadcrumb;
        $this->resp->data = (!empty($this->resp->data)) ? format_data($this->resp->data, 'devices') : array();

        $this->resp->meta->total = count($this->resp->data);
        $this->resp->meta->filtered = count($this->resp->data);

        $this->resp->meta->data_order = array();
        foreach ($this->resp->meta->properties as $key) {
            $this->resp->meta->data_order[] = str_replace('devices.', '', $key);
        }

        if ($this->resp->meta->format !== 'html') {
            output($this);
            return true;
        }
        if (empty($this->resp->data)) {
            if (empty($this->resp->errors)) {
                \Config\Services::session()->setFlashdata('error', 'No data returned when running report.');
            } else {
                \Config\Services::session()->setFlashdata('error', $this->resp->errors);
            }
            return redirect()->route('devicesCollection');
        }
        if ($this->resp->meta->filtered === $this->resp->meta->limit) {
            $_SESSION['warning'] = 'Result restricted to ' . $this->resp->meta->limit . ' items as per license.';
        }
        return view('shared/header', [
            'config' => $this->config,
            'dashboards' => filter_response($this->dashboards),
            'dictionary' => $this->queriesModel->dictionary(),
            'meta' => filter_response($this->resp->meta),
            'orgs' => filter_response($this->orgsUser),
            'queries' => filter_response($this->queriesUser),
            'roles' => filter_response($this->roles),
            'user' => filter_response($this->user)]) .
            view('reportsExecute', ['data' => filter_response($this->resp->data), 'meta' => filter_response($this->resp->meta)])
            . view('shared/footer', ['license_string' => $this->resp->meta->license_string]);
    }
}
