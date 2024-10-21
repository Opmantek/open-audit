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
 * Base Object Summaries
 *
 * @access   public
 * @category Object
 * @package  Open-AudIT\Controller\Summaries
 * @author   Mark Unwin <mark.unwin@firstwave.com>
 * @license  http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 * @link     http://www.open-audit.org
 */
class Summaries extends BaseController
{
    /**
     * Execute a summary
     *
     * @access public
     * @return void
     */
    public function execute($id)
    {
        $query = $this->summariesModel->read($this->resp->meta->id);
        $this->resp->meta->name = $query[0]->attributes->name;
        $this->resp->data = $this->summariesModel->execute($this->resp->meta->id, $this->user);
        $this->resp->meta->total = count($this->resp->data);
        $this->resp->meta->filtered = count($this->resp->data);
        if ($this->resp->meta->format !== 'html') {
            output($this);
            return true;
        }
        if (empty($this->resp->data)) {
            \Config\Services::session()->setFlashdata('error', 'No data returned when running summary.');
            return redirect()->route($this->resp->meta->collection . 'Collection');
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
            view($this->resp->meta->collection . ucfirst($this->resp->meta->action), ['data' => filter_response($this->resp->data), 'meta' => filter_response($this->resp->meta)])
            . view('shared/footer', ['license_string' => $this->resp->meta->license_string]);
    }
}
