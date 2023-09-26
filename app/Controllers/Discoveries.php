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
 * @version   GIT: Open-AudIT_5.0.0
 * @link      http://www.open-audit.org
 */

/**
 * Base Object Discoveries
 *
 * @access   public
 * @category Object
 * @package  Open-AudIT\Controller\Discoveries
 * @author   Mark Unwin <mark.unwin@firstwave.com>
 * @license  http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 * @link     http://www.open-audit.org
 */
class Discoveries extends BaseController
{
    /**
     * Execute a discovery
     *
     * @access public
     * @return void
     */
    public function execute($id)
    {
        $id = intval($id);
        $this->discoveriesModel->queue(intval($id));
        $this->queueModel = model('App\Models\QueueModel');
        $this->queueModel->start();
        if ($this->resp->meta->format !== 'html') {
            $this->resp->data = $this->discoveriesModel->read($id);
            output($this);
            return;
        }
        \Config\Services::session()->setFlashdata('success', 'Discovery started.');
        return redirect()->route('discoveriesRead', [$id]);
    }

    /**
     * Download a discovery including all, for support
     *
     * @access public
     * @return void
     */
    public function download($id)
    {
        $id = intval($id);
        $this->resp->data = $this->discoveriesModel->read($id);
        $this->resp->included = $this->discoveriesModel->includedRead($id);
        $supportModel = new \App\Models\SupportModel();
        $this->resp->included['support'] = $supportModel->collection($this->resp);
        if (!empty($this->config->maps_api_key)) {
            $this->config->maps_api_key = 'Removed from display, but has been set';
        }
        if (!empty($this->config->mail_password)) {
            $this->config->mail_password = 'Removed from display, but has been set';
        }
        $this->resp->included['configuration'] = config('Openaudit');
        output($this);
        return;
    }
}
