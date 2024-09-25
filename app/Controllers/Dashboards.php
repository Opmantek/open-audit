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
 * @version   GIT: Open-AudIT_5.4.0
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

        if ($this->resp->meta->name === 'Security Dashboard') {
            $included = $this->securityIncluded();
            return view('shared/header', [
                'config' => $this->config,
                'dashboards' => filter_response($this->dashboards),
                'meta' => filter_response($this->resp->meta),
                'orgs' => filter_response($this->orgsUser),
                'queries' => filter_response($this->queriesUser),
                'roles' => filter_response($this->roles),
                'user' => filter_response($this->user)]) .
                view('dashboardsSecurity', ['included' => $included])
                . view('shared/footer', ['license_string' => $this->resp->meta->license_string]);
        }

        foreach ($this->resp->data[0]->attributes->options->widgets as $dashboardWidget) {
            $widget = $this->widgetsModel->execute(intval($dashboardWidget->widget_id));
            if ($widget->type === 'pie') {
                $widget->formatted = formatHighchartsPie($widget);
            }
            if ($widget->type === 'line') {
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
            return redirect()->route($this->resp->meta->collection.'Collection');
        }
        $dictionary = $this->{$this->resp->meta->collection.'Model'}->dictionary();
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

    private function securityIncluded()
    {
        $included = array();
        $included['windows_client_av'] = new \stdClass();
        $included['windows_client_av']->red = 0;
        $included['windows_client_av']->yellow = 0;
        $included['windows_client_av']->green = 0;
        $included['windows_client_av']->red_id = 0;
        $included['windows_client_av']->yellow_id = 0;
        $included['windows_client_av']->green_id = 0;
        $included['windows_client_firewall'] = new \stdClass();
        $included['windows_client_firewall']->red = 0;
        $included['windows_client_firewall']->yellow = 0;
        $included['windows_client_firewall']->green = 0;
        $included['windows_client_firewall']->red_id = 0;
        $included['windows_client_firewall']->yellow_id = 0;
        $included['windows_client_firewall']->green_id = 0;

        $included['windows_server_firewall'] = new \stdClass();
        $included['windows_server_firewall']->green = 0;
        $included['windows_server_firewall']->red = 0;
        $included['windows_server_firewall']->green_id = 0;
        $included['windows_server_firewall']->red_id = 0;

        $included['windows_server_av'] = new \stdClass();
        $included['windows_server_av']->green = 0;
        $included['windows_server_av']->red = 0;
        $included['windows_server_av']->green_id = 0;
        $included['windows_server_av']->red_id = 0;

        $included['software'] = new \stdClass();
        $included['software']->red = 0;
        $included['software']->yellow = 0;
        $included['software']->green = 0;
        $included['software']->red_id = 0;
        $included['software']->yellow_id = 0;
        $included['software']->green_id = 0;

        $included['devices_os_updates'] = new \stdClass();
        $included['devices_os_updates']->green = 0;
        $included['devices_os_updates']->red_id = 0;

        $included['devices_not_seen'] = new \stdClass();
        $included['devices_not_seen']->red = 0;
        $included['devices_not_seen']->yellow = 0;
        $included['devices_not_seen']->green = 0;
        $included['devices_not_seen']->red_id = 0;
        $included['devices_not_seen']->yellow_id = 0;
        $included['devices_not_seen']->green_id = 0;

        $included['windows_10_build'] = new \stdClass();
        $included['windows_10_build']->red = 0;
        $included['windows_10_build']->green = 0;
        $included['windows_10_build']->red_id = 0;
        $included['windows_10_build']->green_id = 0;

        $included['windows_11_build'] = new \stdClass();
        $included['windows_11_build']->red = 0;
        $included['windows_11_build']->green = 0;
        $included['windows_11_build']->red_id = 0;
        $included['windows_11_build']->green_id = 0;

        $included['windows_19_build'] = new \stdClass();
        $included['windows_19_build']->red = 0;
        $included['windows_19_build']->green = 0;
        $included['windows_19_build']->red_id = 0;
        $included['windows_19_build']->green_id = 0;

        $included['windows_22_build'] = new \stdClass();
        $included['windows_22_build']->red = 0;
        $included['windows_22_build']->green = 0;
        $included['windows_22_build']->red_id = 0;
        $included['windows_22_build']->green_id = 0;

        $queriesModel = new \App\Models\QueriesModel();
        $queries = $queriesModel->listUser();

        foreach ($queries as $query) {
            if ($query->attributes->name === 'Windows Clients Without AntiVirus') {
                $query_id = $query->id;
                $included['windows_client_av']->red_id = $query_id;
            }
        }
        if (!empty($query_id)) {
            $query = $queriesModel->execute($query_id, $this->user);
            if (!empty($query)) {
                $included['windows_client_av']->red = count($query);
            }
        }
        unset($devices);
        unset($query_id);

        foreach ($queries as $query) {
            if ($query->attributes->name === 'Windows Clients With AntiVirus Not UpToDate') {
                $query_id = $query->id;
                $included['windows_client_av']->yellow_id = $query_id;
            }
        }
        if (!empty($query_id)) {
            $query = $queriesModel->execute($query_id, $this->user);
            if (!empty($query)) {
                $included['windows_client_av']->yellow = count($query);
            }
        }
        unset($devices);
        unset($query_id);

        foreach ($queries as $query) {
            if ($query->attributes->name === 'Windows Clients With AntiVirus') {
                $query_id = $query->id;
                $included['windows_client_av']->green_id = $query_id;
            }
        }
        if (!empty($query_id)) {
            $query = $queriesModel->execute($query_id, $this->user);
            if (!empty($query)) {
                $included['windows_client_av']->green = count($query);
            }
        }
        unset($devices);
        unset($query_id);

        foreach ($queries as $query) {
            if ($query->attributes->name === 'Windows Clients Without Firewall') {
                $query_id = $query->id;
                $included['windows_client_firewall']->red_id = $query_id;
            }
        }
        if (!empty($query_id)) {
            $query = $queriesModel->execute($query_id, $this->user);
            if (!empty($query)) {
                $included['windows_client_firewall']->red = count($query);
            }
        }
        unset($devices);
        unset($query_id);

        foreach ($queries as $query) {
            if ($query->attributes->name === 'Windows Clients With Firewall Disabled') {
                $query_id = $query->id;
                $included['windows_client_firewall']->yellow_id = $query_id;
            }
        }
        if (!empty($query_id)) {
            $query = $queriesModel->execute($query_id, $this->user);
            if (!empty($query)) {
                $included['windows_client_firewall']->yellow = count($query);
            }
        }
        unset($devices);
        unset($query_id);

        foreach ($queries as $query) {
            if ($query->attributes->name === 'Windows Clients With Firewall') {
                $query_id = $query->id;
                $included['windows_client_firewall']->green_id = $query_id;
            }
        }
        if (!empty($query_id)) {
            $query = $queriesModel->execute($query_id, $this->user);
            if (!empty($query)) {
                $included['windows_client_firewall']->green = count($query);
            }
        }
        unset($devices);
        unset($query_id);


        foreach ($queries as $query) {
            if ($query->attributes->name === 'Windows Servers Firewalls Installed') {
                $query_id = $query->id;
                $included['windows_server_firewall']->green_id = $query_id;
            }
        }
        if (!empty($query_id)) {
            $query = $queriesModel->execute($query_id, $this->user);
            if (!empty($query)) {
                $included['windows_server_firewall']->green = count($query);
            }
        }
        unset($devices);
        unset($query_id);

        foreach ($queries as $query) {
            if ($query->attributes->name === 'Windows Servers Firewalls Not Installed') {
                $query_id = $query->id;
                $included['windows_server_firewall']->red_id = $query_id;
            }
        }
        if (!empty($query_id)) {
            $query = $queriesModel->execute($query_id, $this->user);
            if (!empty($query)) {
                $included['windows_server_firewall']->red = count($query);
            }
        }
        unset($devices);
        unset($query_id);

        foreach ($queries as $query) {
            if ($query->attributes->name === 'Windows Servers AntiVirus Installed') {
                $query_id = $query->id;
                $included['windows_server_av']->green_id = $query_id;
            }
        }
        if (!empty($query_id)) {
            $query = $queriesModel->execute($query_id, $this->user);
            if (!empty($query)) {
                $included['windows_server_av']->green = count($query);
            }
        }
        unset($devices);
        unset($query_id);

        foreach ($queries as $query) {
            if ($query->attributes->name === 'Windows Servers AntiVirus Not Installed') {
                $query_id = $query->id;
                $included['windows_server_av']->red_id = $query_id;
            }
        }
        if (!empty($query_id)) {
            $query = $queriesModel->execute($query_id, $this->user);
            if (!empty($query)) {
                $included['windows_server_av']->red = count($query);
            }
        }
        unset($devices);
        unset($query_id);

        foreach ($queries as $query) {
            if ($query->attributes->name === 'Banned Software') {
                $query_id = $query->id;
                $included['software']->red_id = $query_id;
            }
        }
        if (!empty($query_id)) {
            $query = $queriesModel->execute($query_id, $this->user);
            if (!empty($query)) {
                $included['software']->red = count($query);
            }
        }
        unset($devices);
        unset($query_id);

        foreach ($queries as $query) {
            if ($query->attributes->name === 'Ignored Software') {
                $query_id = $query->id;
                $included['software']->yellow_id = $query_id;
            }
        }
        if (!empty($query_id)) {
            $query = $queriesModel->execute($query_id, $this->user);
            if (!empty($query)) {
                $included['software']->yellow = count($query);
            }
        }
        unset($devices);
        unset($query_id);

        foreach ($queries as $query) {
            if ($query->attributes->name === 'Approved Software') {
                $query_id = $query->id;
                $included['software']->green_id = $query_id;
            }
        }
        if (!empty($query_id)) {
            $query = $queriesModel->execute($query_id, $this->user);
            if (!empty($query)) {
                $included['software']->green = count($query);
            }
        }
        unset($devices);
        unset($query_id);

        foreach ($queries as $query) {
            if ($query->attributes->name === 'Devices Without OS Updates for more than 14 Days') {
                $query_id = $query->id;
                $included['devices_os_updates']->red_id = $query_id;
            }
        }
        if (!empty($query_id)) {
            $query = $queriesModel->execute($query_id, $this->user);
            if (!empty($query)) {
                $included['devices_os_updates']->red = count($query);
            }
        }
        unset($devices);
        unset($query_id);

        foreach ($queries as $query) {
            if ($query->attributes->name === 'Devices Not Seen for more than 30 Days') {
                $query_id = $query->id;
                $included['devices_not_seen']->red_id = $query_id;
            }
        }
        if (!empty($query_id)) {
            $query = $queriesModel->execute($query_id, $this->user);
            if (!empty($query)) {
                $included['devices_not_seen']->red = count($query);
            }
        }
        unset($devices);
        unset($query_id);

        foreach ($queries as $query) {
            if ($query->attributes->name === 'Devices Not Seen for more than 7 Days') {
                $query_id = $query->id;
                $included['devices_not_seen']->yellow_id = $query_id;
            }
        }
        if (!empty($query_id)) {
            $query = $queriesModel->execute($query_id, $this->user);
            if (!empty($query)) {
                $included['devices_not_seen']->yellow = count($query);
            }
        }
        unset($devices);
        unset($query_id);

        foreach ($queries as $query) {
            if ($query->attributes->name === 'Devices Seen less than 7 Days ago') {
                $query_id = $query->id;
                $included['devices_not_seen']->green_id = $query_id;
            }
        }
        if (!empty($query_id)) {
            $query = $queriesModel->execute($query_id, $this->user);
            if (!empty($query)) {
                $included['devices_not_seen']->green = count($query);
            }
        }
        unset($devices);
        unset($query_id);

        foreach ($queries as $query) {
            if ($query->attributes->name === 'Windows 10 Latest Build') {
                $query_id = $query->id;
                $included['windows_10_build']->green_id = $query_id;
            }
        }
        if (!empty($query_id)) {
            $query = $queriesModel->execute($query_id, $this->user);
            if (!empty($query)) {
                $included['windows_10_build']->green = count($query);
            }
        }
        unset($devices);
        unset($query_id);

        foreach ($queries as $query) {
            if ($query->attributes->name === 'Windows 10 Not Latest Build') {
                $query_id = $query->id;
                $included['windows_10_build']->red_id = $query_id;
            }
        }
        if (!empty($query_id)) {
            $query = $queriesModel->execute($query_id, $this->user);
            if (!empty($query)) {
                $included['windows_10_build']->red = count($query);
            }
        }
        unset($devices);
        unset($query_id);

        foreach ($queries as $query) {
            if ($query->attributes->name === 'Windows 11 Latest Build') {
                $query_id = $query->id;
                $included['windows_11_build']->green_id = $query_id;
            }
        }
        if (!empty($query_id)) {
            $query = $queriesModel->execute($query_id, $this->user);
            if (!empty($query)) {
                $included['windows_11_build']->green = count($query);
            }
        }
        unset($devices);
        unset($query_id);

        foreach ($queries as $query) {
            if ($query->attributes->name === 'Windows 11 Not Latest Build') {
                $query_id = $query->id;
                $included['windows_11_build']->red_id = $query_id;
            }
        }
        if (!empty($query_id)) {
            $query = $queriesModel->execute($query_id, $this->user);
            if (!empty($query)) {
                $included['windows_11_build']->red = count($query);
            }
        }
        unset($devices);
        unset($query_id);

        foreach ($queries as $query) {
            if ($query->attributes->name === 'Windows 2019 Latest Build') {
                $query_id = $query->id;
                $included['windows_19_build']->green_id = $query_id;
            }
        }
        if (!empty($query_id)) {
            $query = $queriesModel->execute($query_id, $this->user);
            if (!empty($query)) {
                $included['windows_19_build']->green = count($query);
            }
        }
        unset($devices);
        unset($query_id);

        foreach ($queries as $query) {
            if ($query->attributes->name === 'Windows 2019 Not Latest Build') {
                $query_id = $query->id;
                $included['windows_19_build']->red_id = $query_id;
            }
        }
        if (!empty($query_id)) {
            $query = $queriesModel->execute($query_id, $this->user);
            if (!empty($query)) {
                $included['windows_19_build']->red = count($query);
            }
        }
        unset($devices);
        unset($query_id);

        foreach ($queries as $query) {
            if ($query->attributes->name === 'Windows 2022 Latest Build') {
                $query_id = $query->id;
                $included['windows_22_build']->green_id = $query_id;
            }
        }
        if (!empty($query_id)) {
            $query = $queriesModel->execute($query_id, $this->user);
            if (!empty($query)) {
                $included['windows_22_build']->green = count($query);
            }
        }
        unset($devices);
        unset($query_id);

        foreach ($queries as $query) {
            if ($query->attributes->name === 'Windows 2022 Not Latest Build') {
                $query_id = $query->id;
                $included['windows_22_build']->red_id = $query_id;
            }
        }
        if (!empty($query_id)) {
            $query = $queriesModel->execute($query_id, $this->user);
            if (!empty($query)) {
                $included['windows_22_build']->red = count($query);
            }
        }
        unset($devices);
        unset($query_id);

        return $included;
    }
}
