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
 * Base Object Queries
 *
 * @access   public
 * @category Object
 * @package  Open-AudIT\Controller\Queries
 * @author   Mark Unwin <mark.unwin@firstwave.com>
 * @license  http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 * @link     http://www.open-audit.org
 */
class Queries extends BaseController
{

    /**
     * Execute a query
     *
     * @access public
     * @return void
     */
    public function execute($id)
    {
        $this->resp->data = $this->queriesModel->execute($this->resp->meta->id, $this->user);
        $this->resp->meta->total = count($this->resp->data);
        $this->resp->meta->filtered = count($this->resp->data);
        $this->resp->links = create_links($this->resp->meta, $this->resp->links->self, $this->config->page_size);
        if ($this->resp->meta->format !== 'screen') {
            output($this);
            return true;
        } else {
            if (empty($this->resp->data)) {
                return redirect()->route($this->resp->meta->collection.'Collection');
            } else {
                return view('shared/header', [
                    'config' => $this->config,
                    'dictionary' => $this->dictionaryModel->{$this->resp->meta->collection}(),
                    'meta' => filter_response($this->resp->meta),
                    'orgs' => filter_response($this->orgsUser),
                    'queries' => filter_response($this->queriesUser),
                    'roles' => filter_response($this->roles),
                    'user' => filter_response($this->user)]) .
                    view($this->resp->meta->collection . ucfirst($this->resp->meta->action), ['data' => filter_response($this->resp->data)]);
            }
        }
    }
}
