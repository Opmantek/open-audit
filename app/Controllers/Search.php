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
 * Base Object Search
 *
 * @access   public
 * @category Object
 * @package  Open-AudIT\Controller\Search
 * @author   Mark Unwin <mark.unwin@firstwave.com>
 * @license  http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 * @link     http://www.open-audit.org
 */
class Search extends BaseController
{
    public function create()
    {
        $this->resp->meta->name = 'Search';
        $this->resp->data = $this->searchModel->create();
        $this->resp->meta->total = count($this->resp->data);
        $this->resp->meta->filtered = count($this->resp->data);
        $this->resp->meta->data_order = array();
        if ($this->resp->meta->format !== 'html') {
            output($this);
            return true;
        }
        if (empty($this->resp->data)) {
            \Config\Services::session()->setFlashdata('error', 'No data returned when running search.');
            return redirect()->route('devicesCollection');
        }
        foreach ($this->resp->data[0]->attributes as $key => $value) {
            if (stripos($key, 'ip_padded') === false) {
                $key = str_ireplace('devices.', '', $key);
                $this->resp->meta->data_order[] = $key;
            }
        }
        // echo "<pre>\n";
        // print_r($this->resp);
        // exit;
        $this->resp->meta->collection = 'devices';
        return view('shared/header', [
            'config' => $this->config,
            'dictionary' => $this->queriesModel->dictionary(),
            'meta' => filter_response($this->resp->meta),
            'orgs' => filter_response($this->orgsUser),
            'queries' => filter_response($this->queriesUser),
            'roles' => filter_response($this->roles),
            'user' => filter_response($this->user)]) .
            view('searchCreate', ['data' => filter_response($this->resp->data), 'meta' => filter_response($this->resp->meta)])
            . view('shared/footer', ['license_string' => $this->resp->meta->license_string]);
    }
}
