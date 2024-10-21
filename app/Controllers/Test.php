<?php

# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\CLIRequest;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;
use CodeIgniter\Model;

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
 * Base Object Test
 *
 * @access   public
 * @category Object
 * @package  Open-AudIT\Controller\Test
 * @author   Mark Unwin <mark.unwin@firstwave.com>
 * @license  http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 * @link     http://www.open-audit.org
 */
class Test extends BaseController
{
    /**
     * Collection of objects
     *
     * @access public
     * @return NULL
     */
    public function collection()
    {

        echo "Test Collection.";
    }

    /**
     * Read a single object
     *
     * @access public
     * @return NULL
     */
    public function read()
    {
        echo "Test Read.";
    }

    /**
     * Undocumented function
     *
     * @return void
     */
    public function update()
    {
        echo "update";
    }

    /**
     * Undocumented function
     *
     * @return void
     */
    public function delete()
    {
        echo "delete";
    }

    /**
     * Undocumented function
     *
     * @return void
     */
    public function importForm()
    {
        echo "importform";
    }
}
