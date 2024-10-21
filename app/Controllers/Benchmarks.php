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
 * Base Object Benchmarks
 *
 * @access   public
 * @category Object
 * @package  Open-AudIT\Controller\Applications
 * @author   Mark Unwin <mark.unwin@firstwave.com>
 * @license  http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 * @link     http://www.open-audit.org
 */
class Benchmarks extends BaseController
{
    /**
     * Execute a benchmark
     *
     * @access public
     * @return void
     */
    public function execute($id)
    {
        $id = intval($id);
        $queue = new \stdClass();
        $queue->type = 'benchmarks';
        $queue->id = $id;
        $this->benchmarksModel->queue($id);
        $this->queueModel = model('App\Models\QueueModel');
        $this->queueModel->start();
        if ($this->resp->meta->format !== 'html') {
            $this->resp->data = $this->benchmarksModel->read($id);
            output($this);
            return;
        }
        \Config\Services::session()->setFlashdata('success', 'Benchmark started.');
        sleep(5);
        return redirect()->route('benchmarksRead', [$id]);
    }
}
