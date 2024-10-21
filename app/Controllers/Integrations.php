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
 * Base Object Integrations
 *
 * @access   public
 * @category Object
 * @package  Open-AudIT\Controller\Integrations
 * @author   Mark Unwin <mark.unwin@firstwave.com>
 * @license  http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 * @link     http://www.open-audit.org
 */
class Integrations extends BaseController
{
    /**
     * Execute an Integration
     *
     * @access public
     * @return void
     */
    public function execute($id)
    {
        $id = intval($id);
        $this->integrationsModel->queue(intval($id));
        $this->queueModel = model('App\Models\QueueModel');
        $this->queueModel->start();
        if ($this->resp->meta->format !== 'html') {
            $this->resp->data = $this->integrationsModel->read($id);
            output($this);
            return;
        }
        \Config\Services::session()->setFlashdata('success', 'Integration started.');
        sleep(5);
        return redirect()->route('integrationsRead', [$id]);
    }

    /**
     * Delete an individual field from the array of fields in an Integration.
     * NOTE - Overloading the update function in the controller to more easily test permission (without adding yet another permission exception in BaseController)
     *
     * @access public
     * @return void
     */
    public function update($id)
    {
        $data = new stdClass();
        foreach ($this->resp->meta->filter as $item) {
            if ($item->name !== 'integrations.org_id') {
                $data->{$item->name} = $item->value;
            }
        }
        // We only READ here so we have something in data for oae.pm
        $this->resp->data = $this->integrationsModel->read(intval($id));
        if ($this->integrationsModel->deleteFields(intval($id), $data)) {
            output($this);
            return;
        }
        $this->response->setStatusCode(400);
        if (!empty($GLOBALS['stash'])) {
            print_r(json_encode($GLOBALS['stash']));
        }
        return;
    }
}
