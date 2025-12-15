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
 * @version   GIT: Open-AudIT_6.0.1
 * @link      http://www.open-audit.org
 */

/**
 * Base Object Vulnerabilities
 *
 * @access   public
 * @category Object
 * @package  Open-AudIT\Controller\Vulnerabilities
 * @author   Mark Unwin <mark.unwin@firstwave.com>
 * @license  http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 * @link     http://www.open-audit.org
 */
class Vulnerabilities extends BaseController
{
    public function vendor()
    {
        $this->resp->data = $this->vulnerabilitiesModel->vendor();
        if ($this->resp->meta->format !== 'html') {
            output($this);
            return true;
        }
        if (empty($this->resp->data)) {
            if (empty($this->resp->errors)) {
                \Config\Services::session()->setFlashdata('error', 'No data returned.');
            } else {
                \Config\Services::session()->setFlashdata('error', $this->resp->errors);
            }
            return redirect()->route('devicesCollection');
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
            view('vulnerabilitiesVendor', ['data' => filter_response($this->resp->data), 'meta' => $this->resp->meta])
            . view('shared/footer', ['license_string' => $this->resp->meta->license_string]);
    }
}
