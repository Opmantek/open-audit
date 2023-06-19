<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\RequestInterface;

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
 * Base Object Input
 *
 * @access   public
 * @category Object
 * @package  Open-AudIT\Controller\Input
 * @author   Mark Unwin <mark.unwin@firstwave.com>
 * @license  http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 * @link     http://www.open-audit.org
 */
class Input extends BaseController
{

    public function devices()
    {
        # TODO - check for allowed network

        $db = db_connect();

        $request = $this->request;
        $input = $request->getPost('data');
        $device = audit_convert($input);
        if (!$device) {
            log_message('error', 'Could not convert audit submission');
            return false;
        }
        include "include_process_device.php";
        return true;
    }
}
