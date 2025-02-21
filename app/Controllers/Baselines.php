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
 * @version   GIT: Open-AudIT_5.6.3
 * @link      http://www.open-audit.org
 */

/**
 * Base Object Baselines
 *
 * @access   public
 * @category Object
 * @package  Open-AudIT\Controller\Baselines
 * @author   Mark Unwin <mark.unwin@firstwave.com>
 * @license  http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 * @link     http://www.open-audit.org
 */
class Baselines extends BaseController
{
    public $baselinesModel;

    /**
     * Provide a form to choose a group so we can execute a baseline
     *
     * @access public
     */
    public function executeForm($id)
    {
        $id = intval($id);
        $groupsModel = new \App\Models\GroupsModel();
        $this->resp->data = $this->baselinesModel->read($id);
        $this->resp->included['groups'] = $groupsModel->listUser();
        return view('shared/header', [
            'config' => $this->config,
            'dictionary' => $this->baselinesModel->dictionary(),
            'meta' => filter_response($this->resp->meta),
            'orgs' => filter_response($this->orgsUser),
            'queries' => filter_response($this->queriesUser),
            'roles' => filter_response($this->roles),
            'user' => filter_response($this->user)]) .
            view($this->resp->meta->collection . ucfirst($this->resp->meta->action), [
                'data' => filter_response($this->resp->data),
                'meta' => filter_response($this->resp->meta),
                'included' => filter_response($this->resp->included)])
            . view('shared/footer', ['license_string' => $this->resp->meta->license_string]);
    }

    /**
     * Provide a form to choose a group so we can execute a baseline
     *
     * @access public
     */
    public function execute($id)
    {
        return redirect()->route('baselinesRead', [$id]);
    }
}
