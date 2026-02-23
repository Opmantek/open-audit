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
 * @version   GIT: Open-AudIT_6.0.2
 * @link      http://www.open-audit.org
 */

/**
 * Base Object Applications
 *
 * @access   public
 * @category Object
 * @package  Open-AudIT\Controller\Applications
 * @author   Mark Unwin <mark.unwin@firstwave.com>
 * @license  http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 * @link     http://www.open-audit.org
 */
class Applications extends BaseController
{

    public function search()
    {
        $search = $_POST['search'];
        $this->resp->data = $this->applicationsModel->search($search);
        // echo "<pre>\n";
        // echo json_encode($this->resp->data, JSON_PRETTY_PRINT);
        // echo "</pre>";
        // exit;
        // {"application_id":1,"application_name":"MyNewApp","attribute":"primary.devices.name","value":"apollo"}
        $meta = filter_response($this->resp->meta);
        return view('shared/header', [
            'config' => $this->config,
            'dictionary' => $this->applicationsModel->dictionary(),
            'meta' => $meta,
            'orgs' => filter_response($this->orgsUser),
            'queries' => filter_response($this->queriesUser),
            'roles' => filter_response($this->roles),
            'user' => filter_response($this->user)]) .
            view('applicationsSearch', [
                'data' => filter_response($this->resp->data),
                'meta' => $meta,
                'included' => filter_response($this->resp->included)])
            . view('shared/footer', ['license_string' => $this->resp->meta->license_string]);
    }
}
