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
        $collectorsModel = new \App\Models\CollectorsModel();
        $collectors = $collectorsModel->listUser();
        if (!empty($collectors)) {
            $choose_collector = false;
            foreach ($collectors as $collector) {
                if (!empty($collector->attributes->type) and $collector->attributes->type === 'collector') {
                    $choose_collector = true;
                }
            }
            if ($choose_collector) {
                return redirect()->route('discoveriesExecuteForm', [$id]);
            }
        }
        $this->discoveriesModel->queue($id);
        $this->queueModel = model('App\Models\QueueModel');
        $this->queueModel->start();
        if ($this->resp->meta->format !== 'html') {
            $this->resp->data = $this->discoveriesModel->read($id);
            output($this);
            return;
        }
        \Config\Services::session()->setFlashdata('success', 'Discovery started.');
        sleep(5);
        return redirect()->route('discoveriesRead', [$id]);
    }

    /**
     * Choose a Collector (or localhost) to execute a discovery
     *
     * @access public
     * @return void
     */
    public function executeForm($id)
    {
        $id = intval($id);
        $collectorsModel = new \App\Models\CollectorsModel();
        $this->resp->included['collectors'] = $collectorsModel->listUser();
        $dictionary = $this->{$this->resp->meta->collection . 'Model'}->dictionary();
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
            view('discoveriesExecuteForm', [])
            . view('shared/footer', ['license_string' => $this->resp->meta->license_string]);
    }

    /**
     * Schedule the discovery on a Collector or execute it locally
     *
     * @access public
     * @return void
     */
    public function executeCollector($id)
    {
        $id = intval($id);
        if ($this->resp->meta->received_data->attributes->uuid === $this->config->uuid) {
            $this->discoveriesModel->queue($id);
            $this->queueModel = model('App\Models\QueueModel');
            $this->queueModel->start();
            \Config\Services::session()->setFlashdata('success', 'Discovery started.');
        }
        if ($this->resp->meta->received_data->attributes->uuid !== $this->config->uuid) {
            $db = db_connect();
            $sql = "DELETE FROM `discovery_log` WHERE `discovery_id` = ?";
            $db->query($sql, [$id]);

            $sql = "SELECT * FROM `collectors` WHERE `uuid` = ?";
            $collector = $db->query($sql, [$this->resp->meta->received_data->attributes->uuid])->getResult()[0];

            $sql = "SELECT * FROM `discoveries` WHERE `id` = ?";
            $discovery = $db->query($sql, [$id])->getResult()[0];

            $now = time();
            $next = intval(round(ceil(($now + 60) / 300) * 300));
            $minute = intval(date('i', $next));
            $hour = intval(date('H', $next));
            $day_of_month = intval(date('d', $next));
            $month = intval(date('m', $next));

            $sql = "INSERT INTO tasks (`name`, `org_id`, `description`, `sub_resource_id`, `uuid`, `enabled`, `type`, `minute`, `hour`, `day_of_month`, `month`, `day_of_week`, `first_run`, `edited_by`, `edited_date`) VALUES (?, ?, ?, ?, ?, 'y', 'discoveries', ?, ?, ?, ?, '*', '2000-01-01 12:00:00', ?, NOW())";
            $attributes = [
                'Instant Discovery on ' . $collector->name,
                $discovery->org_id,
                $discovery->description,
                $id,
                $this->resp->meta->received_data->attributes->uuid,
                $minute,
                $hour,
                $day_of_month,
                $month,
                $this->user->name
            ];
            $db->query($sql, $attributes);
            \Config\Services::session()->setFlashdata('success', 'Discovery scheduled to execute on collector ' . $collector->name . ' at ' . date('Y-m-d H:i', $next) . '.');
        }
        if ($this->resp->meta->format !== 'html') {
            $this->resp->data = $this->discoveriesModel->read($id);
            output($this);
            return;
        }
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
