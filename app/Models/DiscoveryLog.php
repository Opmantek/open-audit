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
 * @version   GIT: Open-AudIT_5.6.4
 * @link      http://www.open-audit.org
 */

/**
 * Base Object DiscoveryLog
 *
 * @access   public
 * @category Object
 * @package  Open-AudIT\Controller\Applications
 * @author   Mark Unwin <mark.unwin@firstwave.com>
 * @license  http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 * @link     http://www.open-audit.org
 */
class DiscoveryLog extends BaseController
{
    /**
     * Provide the discovery log
     *
     * @access public
     * @return void
     */
    public function collection()
    {
        log_message('info', 'hgere');
        if (!empty($this->resp->meta->groupby) and $this->resp->meta->groupby === 'discovery_log.ip' and !empty($this->resp->meta->filter)) {
            foreach ($resp->meta->filter as $item) {
                if ($item->name === 'discovery_id') {
                    $id = intval($item->value);
                }
            }
            $this->resp->data = $this->{strtolower($this->resp->meta->collection) . "Model"}->getByIp($id);
        }
        #$this->resp->data = $this->{strtolower($this->resp->meta->collection) . "Model"}->collection($this->resp);
        $this->resp->meta->total = count($this->{strtolower($this->resp->meta->collection) . "Model"}->listUser());
        $this->resp->meta->filtered = count($this->resp->data);
        $dictionary = $this->{$this->resp->meta->collection . 'Model'}->dictionary();
        $this->resp->meta->data_order = $dictionary->attributes->collection;
        if ($this->resp->meta->format !== 'html') {
            output($this);
            return;
        }
        $view = $this->resp->meta->collection . ucfirst($this->resp->meta->action);
        $this->resp->included = array();

        $this->resp->recordsTotal = count($this->resp->data);
        $this->resp->recordsFiltered = $this->resp->meta->ip_total;
        echo json_encode($this->resp);
        return true;
        // return view('shared/header', [
        //     'config' => $this->config,
        //     'dashboards' => filter_response($this->dashboards),
        //     'meta' => filter_response($this->resp->meta),
        //     'queries' => filter_response($this->queriesUser),
        //     'roles' => filter_response($this->roles),
        //     'user' => filter_response($this->user)]) .
        //     view($view, ['data' => filter_response($this->resp->data), 'included' => filter_response($this->resp->included)])
        //     . view('shared/footer', ['license_string' => $this->resp->meta->license_string]);
        // return true;
    }
}
