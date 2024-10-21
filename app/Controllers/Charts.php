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
 * Base Object Charts
 *
 * @access   public
 * @category Object
 * @package  Open-AudIT\Controller\Charts
 * @author   Mark Unwin <mark.unwin@firstwave.com>
 * @license  http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 * @link     http://www.open-audit.org
 */
class Charts extends BaseController
{
    /**
     * Read a single item
     *
     * @access public
     * @return void
     */
    public function read($what)
    {
        $this->resp->meta->internal->what = $what;
        $this->resp->data = $this->chartsModel->read($this->resp);
        $this->resp->meta->total = count($this->resp->data);
        $this->resp->meta->filtered = count($this->resp->data);
        output($this);
        return true;
    }
}
