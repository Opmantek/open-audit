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
 * Base Object Widgets
 *
 * @access   public
 * @category Object
 * @package  Open-AudIT\Controller\Widgets
 * @author   Mark Unwin <mark.unwin@firstwave.com>
 * @license  http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 * @link     http://www.open-audit.org
 */
class Widgets extends BaseController
{
    /**
     * Execute a widget
     *
     * @access public
     * @return void
     */
    public function execute($id)
    {
        $widget = $this->widgetsModel->read($this->resp->meta->id);
        $this->resp->meta->name = $widget[0]->attributes->name;
        $this->resp->data = $this->widgetsModel->execute($this->resp->meta->id, $this->user);
        $this->resp->included = $widget;
        $this->resp->meta->total = (!empty($this->resp->data) and is_countable($this->resp->data)) ? count($this->resp->data) : 0;
        $this->resp->meta->filtered = (!empty($this->resp->data) and is_countable($this->resp->data)) ? count($this->resp->data) : 0;
        if ($this->resp->data->type === 'pie') {
            $this->resp->data->formatted = formatHighchartsPie($this->resp->data);
        }
        if ($this->resp->data->type === 'line') {
            $this->resp->data->formatted = formatHighchartsLine($this->resp->data);
        }
        if ($this->resp->meta->format !== 'html') {
            output($this);
            return true;
        }
        if (empty($this->resp->data)) {
            \Config\Services::session()->setFlashdata('error', 'No data returned when executing widget.');
            return redirect()->route($this->resp->meta->collection . 'Collection');
        }
        return view('shared/header', [
            'config' => $this->config,
            'dashboards' => filter_response($this->dashboards),
            'dictionary' => $this->widgetsModel->dictionary(),
            'meta' => filter_response($this->resp->meta),
            'orgs' => filter_response($this->orgsUser),
            'queries' => filter_response($this->queriesUser),
            'roles' => filter_response($this->roles),
            'user' => filter_response($this->user)]) .
            view($this->resp->meta->collection . ucfirst($this->resp->meta->action), ['data' => filter_response($this->resp->data), 'meta' => filter_response($this->resp->meta), 'included' => filter_response($this->resp->included)])
            . view('shared/footer', ['license_string' => $this->resp->meta->license_string]);
    }
}
