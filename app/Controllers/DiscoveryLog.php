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
 * @version   GIT: Open-AudIT_5.6.5
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
        if ($this->resp->meta->format === 'html') {
            $view = $this->resp->meta->collection . ucfirst($this->resp->meta->action);
            return view('shared/header', [
                'config' => $this->config,
                'dashboards' => filter_response($this->dashboards),
                'meta' => filter_response($this->resp->meta),
                'queries' => filter_response($this->queriesUser),
                'roles' => filter_response($this->roles),
                'user' => filter_response($this->user)]) .
                view($view, ['data' => array(), 'included' => filter_response($this->resp->included)])
                . view('shared/footer', ['license_string' => $this->resp->meta->license_string]);
        }
        $this->resp->data = array();
        $this->resp->recordsTotal = 0;
        $this->resp->recordsFiltered = 0;

        if (!empty($this->resp->meta->groupby) and ($this->resp->meta->groupby === 'discovery_log.ip' or $this->resp->meta->groupby === 'discovery_log.device_id') and !empty($this->resp->meta->filter)) {
            foreach ($this->resp->meta->filter as $item) {
                if ($item->name === 'discovery_id' or $item->name === 'discovery_log.discovery_id') {
                    $id = intval($item->value);
                }
            }

            if (!empty($id) and $this->resp->meta->groupby === 'discovery_log.ip') {
                $this->resp->data = $this->{strtolower($this->resp->meta->collection) . "Model"}->getByIp($id);
                $this->resp->recordsTotal = count($this->resp->data);
                if (!empty($GLOBALS['recordsFiltered'])) {
                    $this->resp->recordsFiltered = $GLOBALS['recordsFiltered'];
                }
            }

            if (!empty($id) and $this->resp->meta->groupby === 'discovery_log.device_id') {
                if (!empty($this->config->product) and $this->config->product !== 'community') {
                    if (!empty($this->config->license_limit) and $this->resp->meta->limit > $this->config->license_limit and $this->resp->recordsFiltered > $this->config->license_limit) {
                        $this->resp->meta->limit = $this->config->license_limit;
                        log_message('warning', "The are " . intval($this->resp->recordsFiltered) . " devices in this discovery. This is greater than your license of " . intval($this->config->license_limit) . ". Limiting the resultset to " . intval($this->resp->meta->limit) . ' devices.');
                        $this->resp->warning = "The are " . intval($this->resp->recordsFiltered) . " devices in this discovery. This is greater than your license of " . intval($this->config->license_limit) . ". Limiting the resultset to " . intval($this->resp->meta->limit) . ' devices.';
                    }
                    if (!empty($this->config->license_limit) and intval($this->resp->meta->limit + $this->resp->meta->offset) > intval($this->config->license_limit) and $this->resp->recordsFiltered > $this->config->license_limit) {
                        $this->resp->meta->offset = intval($this->config->license_limit - $this->resp->meta->limit);
                        if ($this->resp->meta->offset < 0) {
                            $this->resp->meta->offset = 0;
                        }
                        log_message('warning', "The are in " . intval($this->resp->recordsFiltered) . " devices in this discovery. This is greater than your license of " . intval($this->config->license_limit) . ". Limiting the resultset to " . intval($this->resp->meta->limit) . ' devices with offset ' . $this->resp->meta->offset . '.');
                        $this->resp->warning = "The are in " . intval($this->resp->recordsFiltered) . " devices in this discovery. This is greater than your license of " . intval($this->config->license_limit) . ". Limiting the resultset to " . intval($this->resp->meta->limit) . ' devices with offset ' . $this->resp->meta->offset . '.';
                    }
                }
                $this->resp->data = $this->{strtolower($this->resp->meta->collection) . "Model"}->getByDevice($id);
                $this->resp->recordsTotal = count($this->resp->data);
                if (!empty($GLOBALS['recordsFiltered'])) {
                    $this->resp->recordsFiltered = $GLOBALS['recordsFiltered'];
                }
                if (!empty($this->resp->warning)) {
                    $this->resp->recordsFiltered = $this->resp->recordsTotal;
                }
            }
        } else {
            $this->resp->data = $this->{strtolower($this->resp->meta->collection) . "Model"}->collection($this->resp);
            $this->resp->recordsTotal = count($this->resp->data);
            if (!empty($GLOBALS['recordsFiltered'])) {
                $this->resp->recordsFiltered = $GLOBALS['recordsFiltered'];
            }
        }

        $dictionary = $this->{$this->resp->meta->collection . 'Model'}->dictionary();
        if ($this->resp->meta->format === 'dataTables') {
            $this->resp->meta->format = 'json';
        }

        output($this);
        return;
    }
}
