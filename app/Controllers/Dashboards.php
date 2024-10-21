<?php

# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

namespace App\Controllers;

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
 * Base Object Dashboards
 *
 * @access   public
 * @category Object
 * @package  Open-AudIT\Controller\Dashboards
 * @author   Mark Unwin <mark.unwin@firstwave.com>
 * @license  http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 * @link     http://www.open-audit.org
 */
class Dashboards extends BaseController
{
    /**
     * Execute a query
     *
     * @access public
     * @return void
     */
    public function execute($id)
    {
        prereqCheck();
        $id = intval($id);
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

        $this->widgetsModel = new \App\Models\WidgetsModel();
        $this->resp->data = $this->dashboardsModel->read($this->resp->meta->id);
        $this->resp->meta->name = $this->resp->data[0]->attributes->name;
        $this->resp->meta->total = count($this->resp->data);
        $this->resp->meta->filtered = count($this->resp->data);

        if ($this->resp->meta->name === 'Summary Dashboard') {
            $included = array();
            $included = $this->devicesModel->summary();
            $summariesModel = new \App\Models\SummariesModel();
            $included = array_merge($included, $summariesModel->includedCollection());
            $included = array_merge($included, $this->devicesModel->includedCollection());
            return view('shared/header', [
                'config' => $this->config,
                'dashboards' => filter_response($this->dashboards),
                'meta' => filter_response($this->resp->meta),
                'orgs' => filter_response($this->orgsUser),
                'queries' => filter_response($this->queriesUser),
                'roles' => filter_response($this->roles),
                'user' => filter_response($this->user)]) .
                view('dashboardsSummary', ['included' => $included])
                . view('shared/footer', ['license_string' => $this->resp->meta->license_string]);
        }
        foreach ($this->resp->data[0]->attributes->options->widgets as $dashboardWidget) {
            $widget = $this->widgetsModel->execute(intval($dashboardWidget->widget_id));
            if (!empty($widget->type) and $widget->type === 'pie') {
                $widget->formatted = formatHighchartsPie($widget);
            }
            if (!empty($widget->type) and $widget->type === 'line') {
                $widget->formatted = formatHighchartsLine($widget);
            }
            $this->resp->included['widgets'][] = $widget;
        }
        if ($this->resp->meta->format !== 'html') {
            output($this);
            return true;
        }
        if (empty($this->resp->data)) {
            \Config\Services::session()->setFlashdata('error', 'No data returned when running query.');
            return redirect()->route($this->resp->meta->collection . 'Collection');
        }
        $dictionary = $this->{$this->resp->meta->collection . 'Model'}->dictionary();
        $template = $this->resp->meta->collection . ucfirst($this->resp->meta->action);
        $update = false;
        if (strpos($this->user->permissions[$this->resp->meta->collection], 'u') !== false and strpos($this->collections->{$this->resp->meta->collection}->actions->{$this->config->product}, 'u') !== false) {
            $update = true;
        }
        return view('shared/header', [
            'config' => $this->config,
            'dashboards' => filter_response($this->dashboards),
            'dictionary' => $dictionary,
            'included' => filter_response($this->resp->included),
            'meta' => filter_response($this->resp->meta),
            'orgs' => filter_response($this->orgsUser),
            'queries' => filter_response($this->queriesUser),
            'roles' => filter_response($this->roles),
            'user' => filter_response($this->user),
            'name' => @$this->resp->data[0]->attributes->name]) .
            view($template, ['data' => filter_response($this->resp->data), 'resource' => filter_response($this->resp->data[0]->attributes), 'update' => $update])
            . view('shared/footer', ['license_string' => $this->resp->meta->license_string]);
    }
}
