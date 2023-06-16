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
 * Base Object Reports
 *
 * @access   public
 * @category Object
 * @package  Open-AudIT\Controller\Reports
 * @author   Mark Unwin <mark.unwin@firstwave.com>
 * @license  http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 * @link     http://www.open-audit.org
 */
class Reports extends BaseController
{
    public function collection()
    {
        $queriesModel = new \App\Models\QueriesModel();
        $summariesModel = new \App\Models\SummariesModel();
        $this->resp->data = $queriesModel->listUser();
        $summaries = $summariesModel->listUser();
        foreach ($summaries as $summary) {
            $summary->attributes->menu_display = 'y';
        }
        $this->resp->data = array_merge($this->resp->data, $summaries);
        usort($this->resp->data, 'sort_attributes');
        $this->resp->meta->total = count($this->resp->data);
        $this->resp->meta->format = 'json';
        output($this);
    }
}
